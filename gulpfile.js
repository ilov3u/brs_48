const elixir = require('laravel-elixir');

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
process.env.DISABLE_NOTIFIER = true;

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js')
        .browserSync({
            notify: false,
            proxy: 'http://localhost:8000',
        });
});
