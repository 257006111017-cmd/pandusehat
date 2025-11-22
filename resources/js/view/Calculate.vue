<script setup>
import { ref } from 'vue'
import BottomBar from '../components/BottomBar.vue'
import axios from 'axios'

const nama = ref('')
const gender = ref('')
const age = ref()
const bb = ref()
const tb = ref()

const isLoad = ref(false);
const result =  ref();
const token = localStorage.getItem('token')

const calculate = async () => {
    isLoad.value = true;
    try {
        const response = await axios.post('/api/analyze', {
            nama : nama.value,
            gender : gender.value,
            age : age.value,
            bb : bb.value,
            tb : tb.value,
        },
        {
            headers:{
                Authorization: `Bearer ${token}`,
                Accept: 'application/json'
            }
        })
        result.value = response.data
    } catch (error) {
    }
    finally{
        isLoad.value = false
    }

}
</script>

<template>
    <div class="container">
        <div class="border border-muted p-3 rounded mt-4">
            <h6 class="fs-14 fw-bold mb-4"><span class="fas fa-chart-line me-1 fs-21"></span>Kalkulasi Gizi</h6>
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="form-group">
                        <input type="text" class="form-control fs-13" v-model="nama" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <select class="form-select fs-13" v-model="gender">
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" v-model="age" placeholder="Usia (tahun)">
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" v-model="bb" placeholder="Berat Badan (kg)">
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" v-model="tb" placeholder="Tinggi Badan (cm)">
                </div>
                <div class="col-12">
                    <button class="btn btn-sm btn-primary w-100 mt-3 fw-bold" @click="calculate">Hitung <span class="fas fa-sync ms-1 fs-21 animate-spin" :class="{ 'animate-spin': isLoad, 'hide': !isLoad}"></span></button>
                </div>
            </div>
        </div>

        <div :class="result.z_score <= -3 || result.z_score < -2 && result.z_score > -3 ? 'bg-danger' : 'bg-success'" class="text-white p-3 mt-3 rounded" v-if="result">
            <span class="fs-21"><span class="fas fa-calculator me-1"></span>Hasil Kalkulasi</span>
            <table class="table table-sm table-borderless mt-2 fs-13">
                <tbody>
                    <tr>
                        <td class="bg-transparent text-white">Z-Score</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ result.z_score }}</td>
                    </tr>
                    <tr>
                        <td class="bg-transparent text-white">Status</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ result.status }}</td>
                    </tr>
                    <tr>
                        <td class="bg-transparent text-white">Kategori</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ result.kategori }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div :class="result.z_score <= -3 || result.z_score < -2 && result.z_score > -3 ? 'bg-danger' : 'bg-success'" class="text-white p-3 mt-2 rounded mb-5" v-if="result">
            <span class="fs-21"><span class="fas fa-brain me-1"></span>Penjelasan dan Rekomendasi dari AI</span><br>
            <p class="fs-13 mt-3 text-justify" v-html="result.penjelasan"></p>
            <p class="fs-13 mt-3 text-justify" v-html="result.rekomendasi"></p>
        </div>

        <div class="text-center mt-5 pt-5" v-else>
            <h1 class="fas fa-calculator text-muted"></h1><br>
            <span class="fs-21 text-muted">Hasil Kalkulasi akan muncul disini</span>
        </div>
        <br><br>
    </div>
    <BottomBar />
</template>


<style scoped>
.animate-spin{
    animation: spin 1s linear infinite;
}
@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.text-justify{
    text-align: justify;
}
.fs-14{
    font-size: 13px;
}
.fs-13{
    font-size: 12px;
}
.fs-21{
    font-size: 11px;
}
.hide{
    display: none;
}
.bg-transparent {
    background-color: transparent !important;
}
</style>