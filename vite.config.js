import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
        VitePWA({
            registerType: 'auto',
            manifest: {
                name: 'Pandu Sehat',
                short_name: 'Pandu Sehat',
                start_url: '/',
                display: 'standalone',
                theme_color: '#ffffff',
                background_color: '#ffffff',
                icons: [
                    {
                        src: '/img/logo.jpg',
                        sizes: '192x192',
                        type: 'image/jpeg',
                    },
                    {
                        src: '/img/logo.jpg',
                        sizes: '512x512',
                        type: 'image/jpeg',
                    },
                ],
            },
        }),
    ],
});
