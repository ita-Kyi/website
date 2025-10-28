import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/datemaker.css',
                'resources/js/api-client.js',
                'resources/js/mock-api-client.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});