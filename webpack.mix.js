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

mix
    .sass('resources/scss/styles.scss', 'public/site/bootstrap.css')
    .css('node_modules/filepond/dist/filepond.min.css', 'public/site/filepond.css')

    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/site/jquery.js')
    .scripts('node_modules/filepond/dist/filepond.min.js', 'public/site/filepond.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');
