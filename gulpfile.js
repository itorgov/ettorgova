var elixir = require('laravel-elixir');

elixir.config.sourcemaps = true;

elixir(function(mix) {
    mix.styles([
        'fonts.css',
        'style.css',
        'responsive.css'
    ]);
    mix.scripts([
        'jquery.js',
        'jquery-migrate.min.js',
        'jquery.cycle.all.min.js',
        'interface-slider-setting.js',
        'backtotop.js',
        'scripts.js'
    ]);
});