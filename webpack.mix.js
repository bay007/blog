const mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
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

mix.disableSuccessNotifications();
mix
	.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css/app.css')
	.sass('resources/sass/plugins/tailwind.scss', 'public/css/app.css')
	.options({
		processCssUrls: false,
		postCss: [
			tailwindcss({
				theme: {
					extend: {}
				},
				variants: {},
				plugins: []
			})
		]
	});

if (mix.inProduction()) {
	mix.version();
}
