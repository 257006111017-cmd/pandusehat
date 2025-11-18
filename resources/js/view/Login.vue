<script setup>
import { ref } from 'vue';

</script>

<template>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-4" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <!-- <img src="../img/hero.png" alt="Pandu Sehat" class="img-fluid" style="max-width: 75%;"> -->
                <h6 class="mt-3 fw-bold fs-21">Selamat datang di aplikasi Pandu Sehat</h6>
                <p class="text-muted fs-21">Silahkan login dengan Google atau Apple ID untuk memulai</p>
            </div>

            <button class="btn btn-dark w-100 mb-2 fs-21"><i class="fa-brands fa-google"></i> Login dengan Google</button>
            <button class="btn btn-dark w-100 mb-2 fs-21"><i class="fa-brands fa-apple"></i> Login dengan Apple ID</button>
        </div>
    </div>
</template>

<style scoped>
.min-vh-100 {
    min-height: 100vh;
}
</style>

<style scoped>
.fs-21{
    font-size: 12px;
}
</style>