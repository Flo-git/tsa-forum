const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix fournit une API propre et fluide pour définir certaines étapes de construction de Webpack
 | pour votre application Laravel. Par défaut, nous compilons le Sass
 | fichier pour l'application ainsi que le regroupement de tous les fichiers JS.
 */
const tailwindcss = require("tailwindcss")

mix.js('resources/js/app.js', 'public/js');
mix.js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
mix.sass("resources/sass/app.scss", "public/css")
        .options({
            processCssUrls: false,
            postCss: [tailwindcss('./tailwind.config.js')],
        })
    .vue();
mix.browserSync({
    open: false,
    proxy: 'nginx' // replace with your web server container
    });
// In your webpack.mix.js, add tailwindcss as a PostCSS plugin:

