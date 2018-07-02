// const HtmlWebPackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

//The sourceMap of CSS won't work if change this development to different one  
const MODE = 'development';

const enabledSourceMap = (MODE === 'development');


module.exports = {
  module: {
    rules: [

      // handle js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
        }
      },

      // handle html files      
      // {
      //   test: /\.html$/,
      //   use: [
      //     {
      //       loader: 'html-loader',
      //       options: { minimize: true }
      //     }
      //   ]
      // },

      // handle scss file to generate css from scss
      {
        test: /\.scss/, 
        use: ExtractTextPlugin.extract({
          use:
            [
            // CSSをバンドルするための機能
            {
              loader: 'css-loader',
              options: {
                // オプションでCSS内のurl()メソッドの取り込みを禁止する
                url: false,
                // ソースマップの利用有無
                sourceMap: enabledSourceMap,
                minimize: true,

                // 0 => no loaders (default);
                // 1 => postcss-loader;
                // 2 => postcss-loader, sass-loader
                importLoaders: 2
              },
            },
            // PostCSSのための設定
            {
              loader: 'postcss-loader',
              options: {
                // PostCSS側でもソースマップを有効にする
                sourceMap: true,
                plugins: [
                  // Autoprefixerを有効化
                  // ベンダープレフィックスを自動付与する
                  require('autoprefixer')({grid: true})
                ]
              },
            },

            {
              loader: 'sass-loader',
              options: {
                // ソースマップの利用有無
                sourceMap: enabledSourceMap,
              }
            }
          ]
        }),
      }
    ]
  },
  plugins: [
    // new HtmlWebPackPlugin({
    //   template: './src/index.html',
    //   filename: './index.html'
    // }),
    new ExtractTextPlugin('main.css')
  ]
};