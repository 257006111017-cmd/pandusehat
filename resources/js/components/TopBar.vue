<script setup>
import { useRouter } from 'vue-router';

defineProps({
    title: String
})

const router = useRouter()

const back = () => {
    router.back()
}
</script>

<template>
    <div class="bg-white pt-2 pb-1 position-fixed top-0 w-100">
        <div class="container">
            <div class="row">
               <div class="col-3">
                    <button class="btn btn-sm btn-white" @click="back"><span class="fas fa-arrow-left"></span></button>
               </div>
               <div class="col-6">
                    <h6 class="fw-bold text-center pt-2">{{ title }}</h6>
               </div>
               <div class="col-3"></div>
            </div>
        </div>
    </div>  
</template>

<style scoped>
    .fs-21{
        font-size: 10px;
    }
</style>    