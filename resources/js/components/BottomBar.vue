<template>
    <div class="bg-white pt-3 pb-1 position-fixed bottom-0 w-100">
        <div class="container">
            <div class="row text-center">
                <router-link to="/" class="col d-flex text-decoration-none flex-column align-items-center" :class="$route.path == '/' ? 'text-primary' : 'text-secondary'">
                    <span class="fas fa-home fa-md mb-3"></span>
                </router-link>
                <router-link to="/calculate" class="col d-flex text-decoration-none flex-column align-items-center" :class="$route.path == '/calculate' ? 'text-primary' : 'text-secondary'">
                    <span class="fas fa-calculator fa-md mb-3"></span>
                </router-link>
                <router-link to="/history" class="col d-flex text-decoration-none flex-column align-items-center" :class="$route.path == '/history' ? 'text-primary' : 'text-secondary'">
                    <span class="fas fa-chart-line fa-md mb-3"></span>
                </router-link>
                <router-link to="/profile" class="col d-flex text-decoration-none flex-column align-items-center" :class="$route.path == '/profile' ? 'text-primary' : 'text-secondary'">
                    <span class="fas fa-user fa-md mb-3"></span>
                </router-link>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .fs-21{
        font-size: 10px;
    }
</style>    