const path = require('path');
const webpack = require('webpack');
const LiveReloadPlugin = require('webpack-livereload-plugin');

module.exports = {
    entry: {
        index: ['./resources/assets/js/main.js']
    },
    output: {
        path: path.join('public'),
        filename: '[name].js',
        publicPath: '/public/'
    },
    module: {
        rules: [
            {
                test: /\.woff2?$|\.ttf$|\.eot$|\.svg$/,
                loader: 'file-loader'
            },
            {
                test: /\.(scss|sass)$/,
                loaders: ['style-loader', 'css-loader', 'sass-loader']
            },

            { test: /\.ts$/, loader: 'ts-loader' }
        ]
    },
    resolve: {
        extensions: ['.webpack.js', '.web.js', '.ts', '.js']
    },
    plugins: [
        new LiveReloadPlugin()
    ],
    watch: true
};