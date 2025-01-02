import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import viteCompression from 'vite-plugin-compression';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/admin/app.js',
                'resources/js/page-index.js',
                'resources/js/page-faq.js',
                'resources/js/page-studio.js',
                'resources/js/page-service.js',
                'resources/js/page-studio.js',
                'resources/js/page-work.js',
            ],
            refresh: true,
        }),
        viteCompression()
    ],
});
