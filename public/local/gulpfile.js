var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.assetsPath = 'public/themes/default/assets';
elixir.config.publicPath = elixir.config.assetsPath;

elixir.config.css.sass.pluginOptions.includePaths = [
    'node_modules/bootstrap-sass/assets/stylesheets',
    'node_modules/font-awesome/scss'
];

elixir(function(mix) {
    mix.copy('node_modules/bootstrap-sass/assets/fonts', elixir.config.publicPath+'/fonts');
    mix.copy('node_modules/font-awesome/fonts', elixir.config.publicPath+'/fonts');

    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', elixir.config.publicPath+'/js/bootstrap.js');
    mix.copy('node_modules/jquery/dist/jquery.min.js', elixir.config.publicPath+'/js/jquery.js');
    mix.copy('node_modules/moment/min/moment.min.js', elixir.config.publicPath+'/js/moment.js');

    mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', elixir.config.publicPath+'/js/datepicker.js');
    mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/src/sass/_bootstrap-datetimepicker.scss', elixir.config.publicPath+'/sass/datepicker.scss');

    //CKeditor Import
    mix.copy('node_modules/ckeditor/ckeditor.js', elixir.config.publicPath+'/js/ckeditor/ckeditor.js');
    mix.copy('node_modules/ckeditor/config.js', elixir.config.publicPath+'/js/ckeditor/config.js');
    mix.copy('node_modules/ckeditor/contents.css', elixir.config.publicPath+'/js/ckeditor/contents.css');
    mix.copy('node_modules/ckeditor/styles.js', elixir.config.publicPath+'/js/ckeditor/styles.js');
    mix.copy('node_modules/ckeditor/lang/', elixir.config.publicPath+'/js/ckeditor/lang/');
    mix.copy('node_modules/ckeditor/plugins/', elixir.config.publicPath+'/js/ckeditor/plugins/');
    mix.copy('node_modules/ckeditor/skins/', elixir.config.publicPath+'/js/ckeditor/skins/');

    mix.scripts([
        'jquery.js', 'bootstrap.js', 'moment.js',
        'datepicker.js', 'ckeditor/ckeditor.js'
    ]);

    mix.sass('backend.scss');
    mix.sass('frontend.scss');
});
