<script setup>
import BottomBar from '../components/BottomBar.vue';
</script>

<template>
    <div class="container">
        <div class="row pt-4 bg-white px-1 sticky-top ">
            <div class="col-9">
                <h6 class="fw-bold p-0 m-0 mt-2">Hi, Rafi Ahfa !</h6>
                <p class="text-muted fs-21">Bagaimana hari ini ?</p>
            </div>
            <div class="col-3 text-end">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCk3j9rnPG4OKDmiA0Ck8sfmC4poGsZDgyqQ&s" width="48" height="48" alt="profile" class="img-fluid object-fit-cover rounded-circle">
            </div>
        </div>

        <div class="bg-primary p-3 rounded mt-2 text-white">
            <span class="fs-21 fw-bold"><span class="fas fa-utensils me-2"></span>Rekomendasi untuk buah hati anda</span><br>
            <span class="text-justify fs-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</span>
        </div>

        <div class="bg-transparent mt-4 mb-4 px-1">
            <h6 class="fw-bold mb-3 fs-13">Menu Cepat</h6>
            <div class="row justify-content-center g-3">
                <div class="col-4 d-flex flex-column align-items-center">
                    <div class="bg-light rounded-circle d-flex flex-column justify-content-center align-items-center" style="width: 50px; height: 50px;">
                        <h5 class="fas fa-calculator m-0 p-0 text-black-50"></h5>
                    </div>
                    <span class="fs-21 mt-1">Kalkulasi</span>
                </div>  
                <div class="col-4 d-flex flex-column align-items-center">
                    <div class="bg-light rounded-circle d-flex flex-column justify-content-center align-items-center" style="width: 50px; height: 50px;">
                        <h5 class="fas fa-chart-line m-0 p-0 text-black-50"></h5>
                    </div>
                    <span class="fs-21 mt-1">Progress</span>
                </div>  
                <div class="col-4 d-flex flex-column align-items-center">
                    <div class="bg-light rounded-circle d-flex flex-column justify-content-center align-items-center" style="width: 50px; height: 50px;">
                        <h5 class="fas fa-user m-0 p-0 text-black-50"></h5>
                    </div>
                    <span class="fs-21 mt-1">Profile</span>
                </div>  
            </div>
        </div>
        <div class="bg-transparent mt-3 mb-5 pb-4 px-1">
            <h6 class="fw-bold mb-3 fs-13">Progress Terakhir</h6>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-white border rounded mt-2">
                <div class="row">
                    <div class="col-10">
                        <h6 class="fs-14 fw-bold m-0 p-0 pb-2">01 Desember 2025</h6>
                        <p class="text-muted fs-21 p-0 mb-2">Aqila Aulia Rahman - 0.2 Tahun</p>
                        <span class="fs-21 bg-primary text-white px-2 py-1 rounded me-1">Selesai</span>
                        <span class="fs-21 bg-danger text-white px-2 py-1 rounded">Obesitas</span>
                    </div>
                    <div class="col-2 text-end">
                        <h6 class="fas fa-chevron-right mt-4 pt-1 text-secondary fs-14"></h6>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BottomBar />
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