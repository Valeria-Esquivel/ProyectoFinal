const mix = require('laravel-mix');

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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/

    mix.styles([
        'resources/assets/plantilla/css/sb-admin.min.css',
        'resources/assets/plantilla/css/sb-admin.css'
    ], 'public/css/plantilla.css')
    .scripts([
        'resources/assets/plantilla/vendor/jquery/jquery.min.js',
        'resources/assets/plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/plantilla/vendor/jquery-easing/jquery.easing.min.js',
        
        'resources/assets/plantilla/vendor/datatables/jquery.dataTables.js',
        'resources/assets/plantilla/vendor/datatables/dataTables.bootstrap4.js',

        'resources/assets/plantilla/js/sb-admin.min.js',
        'resources/assets/plantilla/js/sb-admin.js',
       'resources/assets/plantilla/js/demo/datatables-demo.js'
        
    ], 'public/js/plantilla.js')
    .js(['resources/assets/js/app.js'],'public/js/app.js');

