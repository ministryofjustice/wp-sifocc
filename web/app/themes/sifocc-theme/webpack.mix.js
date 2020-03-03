const mix_ = require('laravel-mix');

const dist = 'dist/';
const _asset = './assets/';

mix_.setPublicPath('./dist')
    .copy(_asset + 'img/*', dist + 'img/')
    .sass(_asset + 'scss/main.scss',  dist + 'css/main.min.css', {
        includePaths: ['node_modules/bourbon/core', 'node_modules/bourbon-neat/core', 'node_modules/node-normalize-scss']
    })
    .js(_asset + 'js/main.js', dist + 'js/main.min.js')
    .js(_asset + 'js/map.js', dist + 'js/map.min.js')
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
