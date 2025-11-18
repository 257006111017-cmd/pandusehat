import { createApp } from 'vue';
import './bootstrap';
import App from './App.vue';
import router from './routes';
import { registerSW } from 'virtual:pwa-register';

registerSW({
    immediate: true,
});

// Create Vue app
const app = createApp(App);

// Use router
app.use(router);

// Mount the app
app.mount('#app');