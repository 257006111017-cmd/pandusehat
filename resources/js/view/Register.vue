<script setup>
import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter();

const nama = ref('')
const email = ref('')
const password = ref('')
const repeat = ref('')

const token = JSON.parse(localStorage.getItem('token') || null);
const user = JSON.parse(localStorage.getItem('user') || null);

const register = async() => {
    const res = await axios.post('/api/register', {
        name: nama.value,
        email: email.value,
        password: password.value
    })

    if(res.data.status == 'success'){
        localStorage.setItem('token', res.data.token);
        localStorage.setItem('user', JSON.stringify(res.data.user));
        router.push('/');
    }
}
</script>

<template>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4" style="width: 100%; max-width: 400px;">
            <div class="bg-success p-3 rounded text-white fs-21" v-if="token">Pendaftaran Berhasil !</div>
            <div class="text-center mb-4">
                <img src="@/img/hero.png" alt="Pandu Sehat" class="img-fluid" style="max-width: 75%;">
                <h6 class="mt-3 fw-bold fs-21">Selamat datang di aplikasi Pandu Sehat</h6>
                <p class="text-muted fs-21">Silahkan isi data diri anda dengan lengkap</p>
            </div>
            <div class="form-group mb-2">
                <input type="text" id="nama" class="form-control fs-13" placeholder="Nama Lengkap" v-model="nama">
            </div>
            <div class="form-group mb-2">
                <input type="email" id="nama" class="form-control fs-13" placeholder="Email" v-model="email">
            </div>
            <div class="form-group mb-2">
                <input type="text" id="nama" class="form-control fs-13" placeholder="Kata Sandi" v-model="password">
            </div>
            <div class="form-group mb-2">
                <input type="password" id="nama" class="form-control fs-13" placeholder="Konfirmasi Kata Sandi" v-model="repeat">
            </div>
            <div class="form-group mb-2">
                <button class="btn btn-sm btn-primary fw-bold w-100" @click="register">Daftar <span class="fas fa-sign-in fs-21"></span></button>
            </div>
            <p class="fs-21 text-center">Sudah mempunyai akun ?, <router-link to="/login">Masuk disini</router-link></p>
        </div>
    </div>
</template>

<style scoped>
.min-vh-100 {
    min-height: 100vh;
}
</style>

<style scoped>
.fs-13{
    font-size: 13px
}
.fs-21{
    font-size: 12px;
}
</style>