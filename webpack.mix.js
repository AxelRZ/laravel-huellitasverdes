const { webpackConfig } = require('laravel-mix');
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
    .styles('resources/css/huellitas.css','public/css/huellitas.css')
    .minify('public/css/huellitas.css')
    .sass('resources/sass/owl/owl.carousel.scss', 'public/css')
    .js('resources/js/owl.carousel.js', 'public/js')


