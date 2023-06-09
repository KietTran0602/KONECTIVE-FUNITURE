import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/login.css', 
                'resources/js/login.js',
                'resources/css/loginadmin.css',
                'resources/js/loginadmin.js',
                'resources/css/index.css',
                'resources/js/index.js',
                'resources/css/profile.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/shop.css',
                'resources/css/contact.css',
                'resources/css/rechange.css',
                'resources/js/avatar.js'
            ],
            refresh: true,
        }),
    ],
});
