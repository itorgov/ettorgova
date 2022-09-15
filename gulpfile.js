var elixir = require('laravel-elixir');

elixir.config.sourcemaps = true;

elixir(function(mix) {
    mix.styles([
        'fonts.css',
        'style.css',
        'responsive.css'
    ]);
    mix.scripts([
        'jquery.min.js',
        'jquery.maskedinput.js',
        'backtotop.js',
        'metrika.js',
        'scripts.js',
        'lead-form.js'
    ]);
    mix.copy('resources/assets/fonts', 'public/fonts');
});