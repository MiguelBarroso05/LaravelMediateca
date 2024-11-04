import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',//admins e clientes - @vite(['resources/sass/app.scss'])
                'resources/js/app.js',//Admins e clientes
                'resources/js/guest.js',//Guests
                'resources/sass/guest.scss',//guests
            ],
            refresh: true,
        }),
    ],
});
