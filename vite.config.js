import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '127.0.0.1',
        port: 5173,
        hmr: {
            host: 'localhost'
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true, // Suppress deprecation warnings from dependencies
                silenceDeprecations: ['import', 'global-builtin', 'color-functions'], // Suppress specific deprecations
            }
        }
    }
});
