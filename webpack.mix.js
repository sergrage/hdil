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

mix.setPublicPath('public/admin')
	.setResourceRoot('/admin/')
	.styles([
		'resources/adminLTE/admin/bootstrap/css/bootstrap.min.css',
		'resources/adminLTE/admin/font-awesome/4.5.0/css/font-awesome.min.css',
		'resources/adminLTE/admin/ionicons/2.0.1/css/ionicons.min.css',
		'resources/adminLTE/admin/plugins/iCheck/minimal/_all.css',
		'resources/adminLTE/admin/plugins/datepicker/datepicker3.css',
		'resources/adminLTE/admin/plugins/select2/select2.min.css',
		'resources/adminLTE/admin/plugins/datatables/dataTables.bootstrap.css',
		'resources/adminLTE/admin/dist/css/AdminLTE.min.css',
		'resources/adminLTE/admin/dist/css/skins/_all-skins.min.css'
	], 'css/admin.css')
    .scripts([
		'resources/adminLTE/admin/plugins/jQuery/jquery-2.2.3.min.js',
		'resources/adminLTE/admin/bootstrap/js/bootstrap.min.js',
		'resources/adminLTE/admin/plugins/select2/select2.full.min.js',
		'resources/adminLTE/admin/plugins/datepicker/bootstrap-datepicker.js',
		'resources/adminLTE/admin/plugins/datatables/jquery.dataTables.min.js',
		'resources/adminLTE/admin/plugins/datatables/dataTables.bootstrap.min.js',
		'resources/adminLTE/admin/plugins/slimScroll/jquery.slimscroll.min.js',
		'resources/adminLTE/admin/plugins/fastclick/fastclick.js',
		'resources/adminLTE/admin/plugins/iCheck/icheck.min.js',
		'resources/adminLTE/admin/dist/js/app.min.js',
		'resources/adminLTE/admin/dist/js/demo.js',
		'resources/adminLTE/admin/dist/js/scripts.js'
	], 'js/admin.js')
    .version();


mix.copy('resources/adminLTE/admin/bootstrap/fonts', 'public/admin/fonts');
mix.copy('resources/adminLTE/admin/dist/fonts', 'public/admin/fonts');
mix.copy('resources/adminLTE/admin/dist/img', 'public/admin/img');
mix.copy('resources/adminLTE/admin/plugins/iCheck/minimal/blue.png', 'public/admin/css');


