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
// Стили библиотек
mix.styles([
    'resources/users/vendor/font-awesome/css/fontawesome-all.min.css',
    'resources/users/vendor/animate.css/animate.min.css',
    'resources/users/vendor/hs-megamenu/src/hs.megamenu.css',
    'resources/users/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
    'resources/users/vendor/fancybox/jquery.fancybox.css',
    'resources/users/vendor/slick-carousel/slick/slick.css',
    'resources/users/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
],'public/front/css/vendor.css');

mix.copy('resources/users/css/font-electro.css', 'public/front/css/font-electro.css');
// Стили темы
mix.sass('resources/users/scss/theme.scss', 'public/front/css/style.css');


// JS
// Глобальные скрипты
mix.copy(['resources/users/vendor/jquery/dist/jquery.min.js'], 'public/front/js/vendor/');
mix.copy(['resources/users/vendor/jquery-migrate/dist/jquery-migrate.min.js'], 'public/front/js/vendor/');
mix.copy(['resources/users/vendor/popper.js/dist/umd/popper.min.js'], 'public/front/js/vendor/');
mix.copy(['resources/users/vendor/bootstrap/bootstrap.min.js'], 'public/front/js/vendor/');
// mix.js([
//     'resources/users/vendor/jquery/dist/jquery.min.js',
//     'resources/users/vendor/jquery-migrate/dist/jquery-migrate.min.js',
//     'resources/users/vendor/popper.js/dist/umd/popper.min.js',
//     'resources/users/vendor/bootstrap/bootstrap.min.js',
// ], 'public/front/js/vendor/app_g.js');

// Инициализация плагинов

mix.copy([
    'resources/users/vendor/appear.js',
    'resources/users/vendor/jquery.countdown.min.js',
    'resources/users/vendor/hs-megamenu/src/hs.megamenu.js',
    'resources/users/vendor/svg-injector/dist/svg-injector.min.js',
    'resources/users/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
    'resources/users/vendor/jquery-validation/dist/jquery.validate.min.js',
    'resources/users/vendor/fancybox/jquery.fancybox.min.js',
    'resources/users/vendor/typed.js/lib/typed.min.js',
    'resources/users/vendor/slick-carousel/slick/slick.js',
    'resources/users/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
], 'public/front/js/vendor/');


// JS темы
mix.copy([
    'resources/users/js/hs.core.js',
    'resources/users/js/components/hs.countdown.js',
    'resources/users/js/components/hs.header.js',
    'resources/users/js/components/hs.hamburgers.js',
    'resources/users/js/components/hs.unfold.js',
    'resources/users/js/components/hs.focus-state.js',
    'resources/users/js/components/hs.malihu-scrollbar.js',
    'resources/users/js/components/hs.validation.js',
    'resources/users/js/components/hs.fancybox.js',
    'resources/users/js/components/hs.onscroll-animation.js',
    'resources/users/js/components/hs.slick-carousel.js',
    'resources/users/js/components/hs.show-animation.js',
    'resources/users/js/components/hs.svg-injector.js',
    'resources/users/js/components/hs.go-to.js',
    'resources/users/js/components/hs.selectpicker.js',
], 'public/front/js/theme/');

mix.js('resources/users/vendor/init_plugins.js','public/front/js/vendor/')


// Шрифты
mix.copyDirectory('resources/users/fonts', 'public/front/fonts');
// Картинки
mix.copyDirectory('resources/users/img','public/front/img');
mix.copyDirectory('resources/users/svg', 'public/front/svg');

// Admin

mix.styles([
    'resources/admin/css/adminlte.min.css',
    'resources/admin/fontawesome/css/all.min.css',

], 'public/admin/css/adminlte.min.css');

mix.copyDirectory('resources/admin/fontawesome/webfonts', 'public/admin/webfonts');

mix.js([
    'resources/admin/js/bootstrap/js/bootstrap.bundle.min.js',
    'resources/admin/js/adminlte.min.js',
    'resources/admin/js/demo.js',
],'public/admin/js/app.js');