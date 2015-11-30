var elixir = require('laravel-elixir');

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
});