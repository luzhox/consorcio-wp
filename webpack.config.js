const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const TerserPlugin = require('terser-webpack-plugin')
const OptimizeCssAssetsWebpackPlugin = require('optimize-css-assets-webpack-plugin')
const fileLoader = 'file-loader' // Guardamos el nombre del loader para evitar errores tipográficos

const themeName = path.basename(__dirname)
const JS_DIR = path.resolve(__dirname, 'src')
const BUILD_DIR = path.resolve(__dirname, 'build')
const pathName = 'consorcio'

module.exports = (env, argv) => {
  const isProduction = argv.mode === 'production'

  const entry = {
    main: path.join(JS_DIR, 'index.js'),
  }

  const output = {
    path: BUILD_DIR,
    filename: isProduction ? 'js/[name].[contenthash].js' : 'js/[name].js',
    // Ruta pública para Webpack 4, crucial para WordPress
    publicPath: `/wp-content/themes/${themeName}/build/`,
    // assetModuleFilename no es compatible con Webpack 4
  }

  const plugins = [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: isProduction ? 'css/[name].[contenthash].css' : 'css/[name].css',
      // Ajusta las URLs dentro del CSS para que apunten correctamente a los activos
      // Ej: si CSS está en build/css/ y las imágenes en build/images/, la URL será ../images/
      publicPath: '../',
    }),
    new BrowserSyncPlugin(
      {
        host: 'localhost',
        port: 3000,
        proxy: `http://${pathName}.local/`,
        files: [path.join(__dirname, '**/*.php')],
        notify: false,
      },
      {
        reload: true,
      }
    ),
  ]

  const rules = [
    {
      test: /\.js$/,
      include: [JS_DIR],
      exclude: /node_modules/,
      use: 'babel-loader',
    },
    {
      test: /\.scss$/,
      exclude: /node_modules/,
      use: [
        MiniCssExtractPlugin.loader,
        'css-loader',
        {
          loader: 'postcss-loader',
          options: {
            postcssOptions: {
              config: path.resolve(__dirname, 'postcss.config.js'), // Apuntar explícitamente al archivo de configuración
            },
          },
        },
        'sass-loader',
      ],
    },
    {
      test: /\.(png|jpe?g|gif|svg|ico)$/i,
      use: [
        {
          loader: fileLoader,
          options: {
            name: 'images/[name].[hash:8].[ext]', // Salida a build/images/
            // publicPath: output.publicPath + 'images/' // Opcional, si es necesario anular
          },
        },
      ],
    },
    {
      test: /\.(woff|woff2|eot|ttf|otf)$/i,
      use: [
        {
          loader: fileLoader,
          options: {
            name: 'fonts/[name].[hash:8].[ext]', // Salida a build/fonts/
            // publicPath: output.publicPath + 'fonts/' // Opcional, si es necesario anular
          },
        },
      ],
    },
  ]

  const optimization = {
    minimize: isProduction,
    minimizer: [
      new TerserPlugin({
        terserOptions: {
          compress: {
            drop_console: true,
          },
          format: {
            comments: false,
          },
        },
        extractComments: false,
      }),
      new OptimizeCssAssetsWebpackPlugin({
        cssProcessorOptions: {
          preset: ['default', { discardComments: { removeAll: true } }],
        },
        canPrint: true, // Opcional: para ver mensajes en la consola
      }),
    ],
  }

  return {
    entry: entry,
    output: output,
    devtool: isProduction ? 'source-map' : 'eval-cheap-module-source-map',
    plugins: plugins,
    module: {
      rules: rules,
    },
    optimization: optimization,
    externals: {
      jquery: 'jQuery',
    },
    stats: isProduction ? 'normal' : 'minimal',
  }
}
