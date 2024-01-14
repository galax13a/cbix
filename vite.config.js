import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/css/home.css', 'resources/css/bioprofile.css', 'resources/css/chatur-bio.css',
               'resources/js/home.js', 'resources/css/adminhome.css', 'resources/js/adminhome.js', 'resources/js/app.js', 
               'resources/js/app-wc-profile.js', 'resources/js/chatur-bio.js'],
      refresh: true,
    }),
  ],
});
