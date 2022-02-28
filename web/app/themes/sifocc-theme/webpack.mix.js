const mix_ = require('laravel-mix');

const dist = 'dist/';
const _asset = './assets/';

mix_.setPublicPath('./dist');
mix_.sass(_asset + 'scss/main.scss', dist + 'css/main.min.css', {
    sassOptions: {
        includePaths: [
            'node_modules/bourbon/core',
            'node_modules/bourbon-neat/core',
            'node_modules/node-normalize-scss'
        ]
    }
})
    .sass(_asset + 'scss/error-pages/errors/404.scss', dist + 'css/404.css')
    .sass(_asset + 'scss/error-pages/errors/error-page.scss', dist + 'css/error-page.css')
    .js(_asset + 'js/main.js', dist + 'js/main.min.js')
    .js(_asset + 'js/map.js', dist + 'js/map.min.js')
    .copy(_asset + 'img/*', dist + 'img/')
    .copy('node_modules/jquery/dist/jquery.min.js', dist + 'js/lib')
    .copy(_asset + 'js/lib/*', dist + 'js/lib')
    .options({
        processCssUrls: false
    });

if (mix_.inProduction()) {
    mix_.version();
} else {
    mix_.sourceMaps();
}
