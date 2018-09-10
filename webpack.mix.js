let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/assets/js/app.js',
        'resources/assets/js/nav.js'], 'public/js')
    .js([
        'resources/assets/js/app.js',
        'resources/assets/js/nav.js',
        'resources/assets/js/home.js'], 'public/js/home.js')
    .js([
        'resources/assets/js/app.js',
        'resources/assets/js/nav.js',
        'resources/assets/js/services.js'], 'public/js/services.js')
    .js([
        'resources/assets/js/app.js',
        'resources/assets/js/nav.js',
        'resources/assets/js/team.js'], 'public/js/team.js')
    .js([
        'resources/assets/js/app.js',
        'resources/assets/js/nav.js',
        'resources/assets/js/testimonials.js'], 'public/js/testimonials.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false
   });
