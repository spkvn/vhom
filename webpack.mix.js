let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 |      Asset Management
 |--------------------------------------------------------------------------
 |
 |      provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .sass('resources/assets/sass/app.scss','public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css')
    .sass('resources/assets/sass/front.scss', 'public/css')

    .copy('node_modules/tinymce/plugins','public/js/plugins',false)
    .copy('node_modules/tinymce/skins','public/js/skins',false)
    .copy('node_modules/tinymce/themes','public/js/themes',false)

    .combine([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/foundation-sites/dist/js/foundation.min.js',
        'node_modules/selectize/dist/js/standalone/selectize.js',
        'node_modules/tinymce/tinymce.js',
        'node_modules/dropzone/dist/dropzone.js',
        'node_modules/axios/dist/axios.js'
    ], 'public/js/vendor.js')

    .combine([
    'node_modules/selectize/dist/css/selectize.default.css'
    ],'public/css/vendor.css')

    .js('resources/assets/js/front.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')

    .webpackConfig({
        resolve : {
            alias: {
                'vue$': 'vue/dist/vue.js'
            },
            extensions: ['.vue','.js','.json','*'],
        },
    });

