<script setup>
import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter();

const email = ref()
const password = ref()

const token = JSON.parse(localStorage.getItem('token') || null)
const user = JSON.parse(localStorage.getItem('user') || null)

const login = async() => {
    const res = await axios.post('/api/login',{
        email: email.value,
        password: password.value
    })

    if(res.data.status == 'success'){
        localStorage.setItem('token', res.data.token)
        localStorage.setItem('user', JSON.stringify(res.data.user))

        router.push('/')
    }
}

</script>

<template>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <img src="@/img/hero.png" alt="Pandu Sehat" class="img-fluid" style="max-width: 75%;"/>
                <h6 class="mt-3 fw-bold fs-21">Selamat datang di aplikasi Pandu Sehat</h6>
                <p class="text-muted fs-21">Silahkan login dengan akun anda</p>
            </div>
            <div class="form-group mb-2">
                <input type="email" id="email" class="form-control fs-13" placeholder="Email" v-model="email">
            </div>
            <div class="form-group mb-2">
                <input type="password" id="password" class="form-control fs-13" placeholder="Kata Sandi" v-model="password">
            </div>
            <div class="form-group mb-2">
                <button class="btn btn-sm btn-primary fw-bold w-100" @click="login">Masuk <span class="fas fa-sign-in fs-21"></span></button>
            </div>
            <p class="fs-21 text-center">Belum mempunyai akun ?, <router-link to="/register">Daftar disini</router-link></p>
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