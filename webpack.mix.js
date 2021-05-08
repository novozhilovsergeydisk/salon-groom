const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .combine([
        // 'public/css/all.css',
        'public/css/custom.css',
        'public/css/all.css',
        'public/css/vertical-dot-navigation.css',
        'public/css/style.css',
        'public/css/nova.css'
    ], 'public/css/app.css')
    .combine([
        'public/js/custom.js',
        'public/js/vertical-dot-navigation.js',
        'public/js/script.js'
    ], 'public/js/common.js')
;
