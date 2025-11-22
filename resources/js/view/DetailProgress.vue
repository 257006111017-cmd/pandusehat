<script setup>
import { onBeforeMount, ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router';
import TopBar from '../components/TopBar.vue'

const detail = ref()

const router = useRouter()

onBeforeMount(async () => {
    const id = router.currentRoute.value.params.id
    
    const response = await axios.get(`/api/progress/detail/${id}`, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('token')}`,
            Accept: 'application/json'
        }
    })
    detail.value = response.data
})

</script>

<template>
    <TopBar title="Detail Riwayat"/>
    <div class="container mt-3 pt-1 pb-5">
        <div class="bg-white mt-5 border border-muted rounded px-3 py-2">
            <span class="fs-21"><span class="fas fa-person"></span> Data Balita</span>
            <table class="table table-sm table-borderless mt-2 fs-13">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ detail.nama }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ detail.gender }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>{{ detail.age }} Tahun</td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>:</td>
                        <td>{{ detail.bb }} kg</td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td>{{ detail.tb }} cm</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div :class="detail.z_score <= -3 || detail.z_score < -2 && detail.z_score > -3 ? 'bg-danger' : 'bg-success'" class="text-white mt-2 border border-muted rounded px-3 py-2">
            <span class="fs-21"><span class="fas fa-chart-line"></span> Hasil Analisis</span>
            <table class="table table-sm table-borderless mt-2 fs-13">
                <tbody>
                    <tr>
                        <td class="bg-transparent text-white">Z Score</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ detail.z_score }}</td>
                    </tr>
                    <tr >
                        <td class="bg-transparent text-white">Kategori</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ detail.kategori }}</td>
                    </tr>
                    <tr>
                        <td class="bg-transparent text-white">Status</td>
                        <td class="bg-transparent text-white">:</td>
                        <td class="bg-transparent text-white">{{ detail.status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <div :class="detail.z_score <= -3 || detail.z_score < -2 && detail.z_score > -3 ? 'bg-danger' : 'bg-success'" class="text-white px-3 py-2 rounded mt-2">
        <span class="fs-21"><span class="fas fa-brain"></span> Rekomendasi</span>
        <div class="text-justify mt-3 fs-13" v-html="detail.penjelasan"></div>
        <div class="text-justify mt-3 fs-13" v-html="detail.rekomendasi"></div>
    </div>
    </div>
</template>


<style scoped>
.animate-spin{
    animation: spin 1s linear infinite;
}
.bg-transparent {
    background-color: transparent !important;
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
</style>