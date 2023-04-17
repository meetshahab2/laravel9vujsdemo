let mix = require('laravel-mix');

mix.js('src/app.js', 'dist/js')
    .sass('src/app.sass', 'dist/css')
    .version();