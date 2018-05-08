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



mix.setPublicPath('public/build')
   .setResourceRoot('/build/')
   .js('resources/assets/js/app.js', 'js')
   .sass('resources/assets/sass/app.scss', 'css')
   .version();


mix.styles([
	'resource/adminLTE/plugins/font-awesome/css/font-awesome.min.css',
	'resource/adminLTE/dist/css/adminlte.min.css',
	'resource/adminLTE/plugins/iCheck/flat/blue.css',
	'resource/adminLTE/plugins/morris/morris.css',
	'resource/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
	'resource/adminLTE/plugins/datepicker/datepicker3.css',
	'resource/adminLTE/plugins/daterangepicker/daterangepicker-bs3.css',
	'resource/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
	], 'public/admin/css/adminLTE.css');

mix.scripts([
	'resource/adminLTE/plugins/jquery/jquery.min.js',
	'resource/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
	'resource/adminLTE/plugins/morris/morris.min.js',
	'resource/adminLTE/plugins/sparkline/jquery.sparkline.min.js',
	'resource/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
	'resource/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
	'resource/adminLTE/plugins/knob/jquery.knob.js',
	'resource/adminLTE/plugins/daterangepicker/daterangepicker.js',
	'resource/adminLTE/plugins/datepicker/bootstrap-datepicker.js',
	'resource/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
	'resource/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
	'resource/adminLTE/plugins/fastclick/fastclick.js',
	'resource/adminLTE/dist/js/pages/dashboard.js',
	'resource/adminLTE/dist/js/demo.js',
	], 'public/admin/js/adminLTE.js')