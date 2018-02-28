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

mix.sass('resources/assets/sass/app.scss','public/css');
mix.sass('resources/assets/sass/admin.scss', 'public/css');
mix.combine([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/foundation-sites/dist/js/foundation.min.js'
], 'public/js/vendor.js');
mix.js('resources/assets/js/front.js', 'public/js');

