import { defineConfig } from 'vite';

import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/reactjs/app.jsx',
            ],
            refresh: true,
        }),
        react(),
    ],
    resolve: {
      alias: {
        '@layouts': path.resolve(__dirname, 'resources/js/reactjs/layouts'),
        '@components': path.resolve(__dirname, 'resources/js/reactjs/components'),
        '@pages': path.resolve(__dirname, 'resources/js/reactjs/pages'),
      }
    }
});