let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/style.scss', 'public/css');
mix.js('resources/assets/js/main.coffee', 'public/js')
	   .webpackConfig({
			module: {
				rules: [
					{ test: /\.coffee$/, loader: 'coffee-loader' }
				]
			}
	   });
mix.js('resources/assets/js/articles.coffee', 'public/js')
	   .webpackConfig({
			module: {
				rules: [
					{ test: /\.coffee$/, loader: 'coffee-loader' }
				]
			}
	   });