import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/src/index.scss', 'resources/js/src/main.ts'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js/src'),
            '@store': path.resolve(__dirname, './resources/js/src/store'),
            '@components': path.resolve(__dirname, './resources/js/src/components'),
            '@modules': path.resolve(__dirname, './resources/js/src/modules'),
            '@pages': path.resolve(__dirname, './resources/js/src/pages')
        }
    }

});
