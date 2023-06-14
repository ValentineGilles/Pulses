let mix = require('laravel-mix');
const webpack = require('webpack');

mix.js('resources/js/app.js', 'public/build/js')
   .setPublicPath('public').react()
   .webpackConfig({
    resolve: {
        fallback: {
            stream: require.resolve('stream-browserify'),
            buffer: require.resolve('buffer'),
            os: require.resolve('os-browserify/browser'),
        },
    },
    plugins: [
        new webpack.ProvidePlugin({
            Buffer: ['buffer', 'Buffer'],
        }),
    ],
    })
   .postCss('resources/css/app.css', 'public/css', [
       //
   ]);;

// Autres configurations...

mix.version(); // Cette ligne ajoute un hash aux noms de fichiers compilés

