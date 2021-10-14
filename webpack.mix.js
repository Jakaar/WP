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


// ADMIN UI JS & SCSS START

    // mix.js('resources/js/app.js', 'public/js');
    mix.sass('resources/admin_ui/sass/app.scss', 'public/aPanel/css/admin.css');
    mix.js('resources/admin_ui/js/main.js', 'public/aPanel/js/main.js');

// ADMIN END
