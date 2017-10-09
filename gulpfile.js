const elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
require('laravel-elixir-vue-2');

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

elixir(function(mix) {
 mix.task('multiple-sass', 'resources/assets/sass/frontend/*.scss'); // run task of gulp
 mix.sass('backend/*.scss', 'public/css/backend/main.css');
 mix.browserify('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js','public/js/frontend/bootstrap.min.js');
 mix.browserify('frontend/main.js','public/js/frontend/main.js');
 mix.browserify('backend/main.js','public/js/backend/main.js');
 mix.browserSync({
  proxy: 'http://localhost/init_project/public' // edit proxy server for development here
 });
});

gulp.task('multiple-sass', function(){
 return gulp.src('resources/assets/sass/frontend/*.scss')
     .pipe(sass())
     .pipe(autoprefixer())
     .pipe(gulp.dest('public/css/frontend'));
});
