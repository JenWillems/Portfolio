import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',  // Use SCSS here
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
