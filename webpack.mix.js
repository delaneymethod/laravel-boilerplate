const del = require('del');
const { mix } = require('laravel-mix');

del(['public/assets/**', '!public/assets']);

mix.setPublicPath('public');

if (mix.inProduction) {
    mix.disableNotifications();
}

mix.sass('resources/assets/sass/global.scss', 'public/assets/css/global.css');

mix.js('resources/assets/js/global.js', 'public/assets/js/global.js');

mix.copy('resources/assets/fonts', 'public/assets/fonts');

mix.copy('resources/assets/img', 'public/assets/img');
