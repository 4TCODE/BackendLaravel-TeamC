const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
       processCssUrls: false
   })
   .webpackConfig({
       stats: {
           children: true,
       },
       resolve: {
           extensions: ['.js', '.jsx', '.json', '.scss']
       }
   });

if (mix.inProduction()) {
    mix.version();
}
