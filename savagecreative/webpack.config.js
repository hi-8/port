const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
  entry: "./src/index.js",
  output: {
    filename: "bundle.js",
    path: path.resolve(__dirname, "dist")
  },
  // 最適化オプションを上書き
  optimization: {
    minimizer: [new TerserPlugin({}), new OptimizeCssAssetsPlugin({})]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "main.css"
    })
  ],
  performance: {
    hints: false
  },
  devtool: "inline-source-map",
  module: {
    rules: [
      // babel-loaderの設定
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"]
            }
          }
        ],
        exclude: /node_modules/
      },

      // css/sass-loaderの設定
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              url: false,
              sourceMap: true,
              importLoaders: 2
            }
          },
          {
            loader: "postcss-loader",
            options: {
              // PostCSS側でもソースマップを有効にする
              sourceMap: true,
              plugins: [
                // Autoprefixerを有効化
                // ベンダープレフィックスを自動付与する
                require("autoprefixer")({ grid: true })
              ]
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "main.css"
    })
  ]
};
