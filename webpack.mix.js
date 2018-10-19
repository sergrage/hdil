let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | HDIL
 |--------------------------------------------------------------------------
*/

// mix
//     .setPublicPath('public/build')
//     .setResourceRoot('/build/')
//     .js('resources/assets/js/app.js', 'js')
//     .sass('resources/assets/sass/app.scss', 'css')
//     .version();

/*
 |--------------------------------------------------------------------------
 | ADMIN LTE
 |--------------------------------------------------------------------------
*/

mix.styles([
    'resources/admin/dist/css/adminlte.min.css',
    'resources/admin/plugins/font-awesome/css/font-awesome.min.css',
  ], 'public/admin/css/admin.css')
    .scripts([
    'resources/admin/plugins/jquery/jquery.min.js',
    'resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/admin/dist/js/adminlte.min.js',
  ], 'public/admin/js/admin.js')
    .version();

mix.copy('resources/admin/plugins/font-awesome/fonts', 'public/admin/fonts');
// mix.copy('resources/adminLTE/admin/dist/fonts', 'public/admin/fonts');
mix.copy('resources/admin/dist/img', 'public/admin/img');
// mix.copy('resources/adminLTE/admin/plugins/iCheck/minimal/blue.png', 'public/admin/css');


/*
 |--------------------------------------------------------------------------
 | HDIL APP
 |--------------------------------------------------------------------------
*/

mix.sass('resources/app/sass/app.scss', 'public/app/css/app.css').version();
mix.js('resources/app/js/app.js', 'public/app/js/app.js').version();
mix.copy('resources/app/img', 'public/app/img');