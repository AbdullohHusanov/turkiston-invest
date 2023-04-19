// import {defineConfig, loadEnv} from 'vite';
// import laravel from 'laravel-vite-plugin';


// export default defineConfig(({ command, mode }) =>{
//     const env = loadEnv(mode, process.cwd(), '')
//
//     return {
//         plugins: [
//             laravel({
//                 input: [
//                     'resources/sass/auth/app.scss',
//                     'resources/sass/clients/app.scss',
//                     'resources/sass/site/app.scss',
//                     'resources/js/auth/app.js',
//                     'resources/js/site/app.js',
//                     'resources/js/clients/app.js',
//                     'resources/fonts/ProximaNova/stylesheet.css',
//                 ],
//
//                 refresh: true,
//             }),
//         ],
//         base: env.APP_URL,
//         server: {
//             open: env.APP_URL
//         }
//     }
// });


import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/sass/auth/app.scss',
                'resources/sass/clients/app.scss',
                'resources/sass/site/app.scss',
                'resources/js/auth/app.js',
                'resources/js/site/app.js',
                'resources/js/clients/app.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
    },

});
