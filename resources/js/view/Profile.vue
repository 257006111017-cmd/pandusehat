<script setup>
import BottomBar from '../components/BottomBar.vue';
import axios from 'axios'
import { useRouter } from 'vue-router';

const router = useRouter()

const user = JSON.parse(localStorage.getItem('user'))

const signout = async() => {
    localStorage.setItem('user', '')
    localStorage.setItem('token', '')

    axios.post('http://localhost:8000/api/logout', {
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        }
    })
    router.push('/login')
}
</script>

<template>
    <div class="container">
        <!-- <div class="d-flex align-items-center px-1 mt-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCk3j9rnPG4OKDmiA0Ck8sfmC4poGsZDgyqQ&s" alt="profile" class="img-fluid object-fit-cover rounded-circle me-3" width="48" height="48">
            <div>
                <h6 class="fw-bold p-0 m-0 pt-2">Rafi Ahfa</h6>
                <span class="text-muted mb-0 fs-13">rafiahfa01@gmail.com</span>
            </div>
        </div> -->

        <div class="mt-5 mb-4 text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCk3j9rnPG4OKDmiA0Ck8sfmC4poGsZDgyqQ&s" alt="profile" class="img-fluid object-fit-cover rounded-circle" width="80" height="80">
            <h6 class="fw-bold p-0 m-0 pt-3">{{ user.name }}</h6>
            <span class="text-muted mb-0 fs-13">{{ user.email }}</span>
        </div>

        <div class="col-12 bg-light text-dark px-3 py-2 rounded mt-2">
            <div class="d-flex align-items-center pt-2">
                <h6 class="fs-13 fas fa-sync me-2"></h6>
                <h6 class="fs-13">Sinkronisasi Data (678 kb tersedia)</h6>
            </div>
        </div>
        <div class="col-12 bg-light text-dark px-3 py-2 rounded mt-2">
            <div class="d-flex align-items-center pt-2">
                <h6 class="fs-13 fas fa-address-card me-2"></h6>
                <h6 class="fs-13">Ubah Profil</h6>
            </div>
        </div>
        <div class="col-12 bg-light text-dark px-3 py-2 rounded mt-2">
            <div class="d-flex align-items-center pt-2">
                <h6 class="fs-13 fas fa-key me-2"></h6>
                <h6 class="fs-13">Ubah Password</h6>
            </div>
        </div>
        <div class="col-12 bg-danger text-white px-3 py-2 rounded mt-2" @click="signout">
            <div class="d-flex align-items-center pt-2">
                <h6 class="fs-13 fas fa-sign-out-alt me-2"></h6>
                <h6 class="fs-13 fw-bold">Sign Out</h6>
            </div>
        </div>
    </div>
    <BottomBar />
</template>

<style scoped>
.fs-13{
    font-size: 12px;
}
.fs-21{
    font-size: 11px;
}
</style>