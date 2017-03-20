const path = require("path");
const webpack = require('webpack');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: {
        index: ['./resources/assets/js/main.js']

    },
    output: {
        path: path.join('public'),
        filename: '[name].js',
        publicPath: '/public/'
    },
    resolve: {
        extensions: ['', '.webpack.js', '.web.js', '.ts', '.js']
    },
    module: {
        loaders: [
            {
                test: /\.woff2?$|\.ttf$|\.eot$|\.svg$/,
                loader: 'file'
            },
            {
                test: /\.(scss|sass)$/,
                loaders: ['style-loader', 'css-loader', 'sass-loader'],
            },

            { test: /\.ts$/, loader: 'ts-loader' }
        ]
    },
    plugins: [
        new LiveReloadPlugin()
    ]
};