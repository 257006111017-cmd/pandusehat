<script setup>
import BottomBar from '../components/BottomBar.vue';
</script>

<template>
    <div class="container">
        <div class="border border-muted p-3 rounded mt-4">
            <h6 class="fs-14 fw-bold mb-4"><span class="fas fa-chart-line me-1 fs-21"></span>Kalkulasi Gizi</h6>
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="form-group">
                        <input type="text" class="form-control fs-13" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <select class="form-select fs-13">
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" placeholder="Usia (tahun)">
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" placeholder="Berat Badan (kg)">
                </div>
                <div class="col-6 mb-2">
                    <input type="number" class="form-control fs-13" placeholder="Tinggi Badan (cm)">
                </div>
                <div class="col-12">
                    <button class="btn btn-sm btn-primary w-100 mt-3">Hitung <span class="fas fa-sync ms-1 fs-21 animate-spin"></span></button>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-5">
            <h1 class="fas fa-calculator text-muted"></h1><br>
            <span class="fs-21 text-muted">Hasil Kalkulasi akan muncul disini</span>
        </div>
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