<script setup>
import { ref, onMounted, onBeforeMount } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'
import BottomBar from '../components/BottomBar.vue'

const router = useRouter();
const token = localStorage.getItem('token')
const data = ref([])

const detail = (id) => {
    router.push(`/progress/detail/${id}`)
}

onBeforeMount(async () => {
    const response = await axios.get('/api/progress', {
        headers: {
            Authorization: `Bearer ${token}`
        }
    })

    data.value = response.data
})
</script>

<template>
    <div class="container mt-2 pt-3 px-4 pb-5">
        <div class="row">
             <div class="col-12 p-3 bg-white border rounded mt-2" v-for="item in data" @click="detail(item.id)">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">{{ item.tgl }}</h6>
                        <p class="text-muted fs-21 p-0 mb-2">{{ item.nama }} - {{ item.umur }} Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <!-- <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span> -->
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BottomBar/>
</template>

<style scoped>
.bg-primary{
    background-color: #0048ffe9 !important;
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
</style>