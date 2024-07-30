import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; // Only if you're using Vue
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/sass/app.scss', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
});
