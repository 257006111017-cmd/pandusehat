import { createRouter, createWebHistory } from 'vue-router';
import Login from '../view/Login.vue';
import Home from '../view/Home.vue';
import Profile from '../view/Profile.vue';
import Calculate from '../view/Calculate.vue';
import Register from '../view/Register.vue';
import DetailProgress from '../view/DetailProgress.vue';
import History from '../view/History.vue';

const routes = [
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: { requiresAuth: false }
    },
    {
        path: '/login',
        name: 'Login',
        component: Login,
        meta: { requiresAuth: false }
    },
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: { requiresAuth: true }
    },
    {
        path: '/calculate',
        name: 'calculate',
        component: Calculate,
        meta: { requiresAuth: true }
    },
    {
        path: '/progress/detail/:id',
        name: 'detail',
        component: DetailProgress,
        meta: { requiresAuth: true }
    },
    {
        path: '/profile',
        name: 'profile',
        component: Profile,
        meta: { requiresAuth: true }
    },
    {
        path: '/history',
        name: 'history',
        component: History,
        meta: { requiresAuth: true }
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('token');
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!token) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            });
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;