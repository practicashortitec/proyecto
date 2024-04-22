const mix = require('laravel-mix');

//nuevo
const path = require('path');

const { VueLoaderPlugin } = require('vue-loader');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.scss', 'public/css')
 .webpackConfig({
    module: {
       rules: [
          {
             test: /\.vue$/,
             loader: 'vue-loader'
          },
          {
             test: /\.js$/,
             exclude: /node_modules/,
             use: {
                loader: 'babel-loader'
             }
          }
       ]
    },
    plugins: [
       new VueLoaderPlugin()
    ]
 });