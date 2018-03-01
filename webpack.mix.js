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

mix.copy('node_modules/tinymce/plugins','public/js/plugins',false);
mix.copy('node_modules/tinymce/skins','public/js/skins',false);
mix.copy('node_modules/tinymce/themes','public/js/themes',false);

mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js',
    'node_modules/tinymce/tinymce.js',
    'node_modules/dropzone/dist/dropzone.js'
], 'public/js/vendor.js');

mix.js('resources/assets/js/front.js', 'public/js');
mix.js('resources/assets/js/admin.js', 'public/js');

