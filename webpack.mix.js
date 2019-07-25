const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const tailwindcss = require('tailwindcss');


 // mix.webpackConfig({
 //   watchOptions: {
 //     ignored: /node_modules/
 //   }
 // });

mix.js('resources/js/app.js', 'public/js')
      .version()
      .sass('resources/sass/app.scss', 'public/css')
      .version()
      .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
      })
      .purgeCss();
