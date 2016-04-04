var elixir = require('laravel-elixir');
var gulp = require('gulp');
var uncss = require('gulp-uncss');
var nano = require('gulp-cssnano');

gulp.task('nano', function () {
    return gulp.src('public/css/all.css')
        .pipe(uncss({
            html: ['resources/views/**/*.php']
        }))
        .pipe(nano())
        .pipe(gulp.dest('public/css/all-min.css'));
});

elixir(function(mix) {
    mix.styles([
        'fonts.css',
        'responsive.css',
        'style.css'
    ]);
    mix.scripts([
        'jquery.js',
        'jquery-migrate.min.js',
        'jquery.cycle.all.min.js',
        'interface-slider-setting.js',
        'backtotop.js',
        'scripts.js'
    ]);
    mix.task('nano');
});