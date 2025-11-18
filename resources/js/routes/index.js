import { createRouter, createWebHistory } from 'vue-router';
import Login from '../view/Login.vue';
import Home from '../view/Home.vue';
import Profile from '../view/Profile.vue';
import Calculate from '../view/Calculate.vue';

const routes = [
    {
        path: '/login',
        name: 'Login',
        component: Login,
    },
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/calculate',
        name: 'calculate',
        component: Calculate
    },
    {
        path: '/profile',
        name: 'profile',
        component: Profile
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;