import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/auth/app.scss',
                'resources/sass/clients/app.scss',
                'resources/sass/site/app.scss',
                'resources/js/auth/app.js',
                'resources/js/site/app.js',
                'resources/js/clients/app.js',
            ],
            refresh: true,
        }),
    ],
});
