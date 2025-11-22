<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenrouterController extends Controller
{
    public function analisisGizi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'bb' => 'required',
            'tb' => 'required',
        ]);

        // Prompt yang akan diberikan kepada Model
        $prompt = "
            Kamu adalah seorang ahli gizi WHO yang menghitung status gizi anak menggunakan Standar WHO 2006 (Growth Standard).

            Gunakan aturan berikut untuk memilih indikator:
            - Jika tujuan adalah menilai stunting: gunakan TB/U (Tinggi Badan menurut Umur)
            - Jika menilai gizi kurang / gizi buruk: gunakan BB/U (Berat Badan menurut Umur)
            - Jika menilai wasting / kurus / sangat kurus: gunakan BB/TB (Berat Badan menurut Tinggi Badan)
            - Jika umur ≥ 60 bulan: gunakan IMT/U (BMI-for-age)

            Selalu gunakan umur dalam bulan. Jika input masih dalam tahun, konversi otomatis menjadi bulan.

            Gunakan rumus WHO LMS:
            z = ((nilai/M)^L - 1) / (L × S)

            Gunakan tabel referensi WHO 2006 berdasarkan:
            - Jenis kelamin,
            - Umur (bulan),
            - Tinggi badan atau berat badan yang relevan.

            Data anak:
            - Jenis kelamin: $request->gender
            - Umur: $request->age (dalam tahun atau bulan)
            - Berat badan: $request->bb kg
            - Tinggi badan: $request->tb cm

            Tugas:
            1. Tentukan indikator yang benar sesuai ketentuan di atas.
            2. Hitung 1 jenis Z-Score yang paling relevan (jangan lebih dari satu).
            3. Tentukan kategori status gizi berdasarkan nilai Z-score:
            - Stunting: TB/U < -2 SD
            - Severe stunting: TB/U < -3 SD
            - Underweight: BB/U < -2 SD
            - Wasting: BB/TB < -2 SD
            - Severe wasting: BB/TB < -3 SD
            - Obesitas: IMT/U > +2 SD
            - Normal: -2 SD sampai +2 SD
            4. Buat penjelasan singkat (HTML allowed: <b>, <i>, <ul>, <li>).
            5. Buat rekomendasi singkat dalam HTML.
            6. Gaya penulisan penjelasan dan rekomendasi harus menarik, interaktif, dan boleh memakai emoji.

            Format output HARUS JSON, tanpa backtick, tanpa teks tambahan:

            {
            \"z_score\": \"\",
            \"kategori\": \"\",
            \"status\": \"\",
            \"penjelasan\": \"\",
            \"rekomendasi\": \"\"
            }

            Jika suatu data tidak dapat dihitung (contoh: umur tidak valid), berikan JSON dengan pesan error dalam field penjelasan.
        ";

        $response = Http::withHeaders([
            "Authorization" => "Bearer ".env("OPENROUTER_API_KEY"),
            "HTTP-Referer" => url('/'),
        ])->post(env("OPENROUTER_BASE_URL"), [
            "model" => "google/gemma-3-27b-it",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $prompt,
                ],
            ],
        ]);

        
        $content = $response->json()['choices'][0]['message']['content'];
        $content = str_replace(["```json", "```"],"",$content);
        $data = json_decode($content, true);

        $head = \DB::table('kalkulasi_heads')->insertGetId([
            'user_id' => auth()->user()->id,
            'tgl' => date('Y-m-d'),
            'nama' => $request->nama,
            'gender' => $request->gender,
            'age' => $request->age,
            'bb' => $request->bb,
            'tb' => $request->tb,
        ]);

        $detail = \DB::table('kalkulasi_details')->insert([
            'kalkulasi_id' => $head,
            'z_score' => $data['z_score'],
            'kategori' => $data['kategori'],
            'status' => $data['status'],
            'penjelasan' => $data['penjelasan'],
            'rekomendasi' => $data['rekomendasi'],
        ]);

        return response()->json($data);
    }
}
