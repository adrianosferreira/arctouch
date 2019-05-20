const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const webPackModuleSettings = {
	rules: [
		{
			test: /\.(js|jsx)$/,
			exclude: /node_modules/,
			use: {
				loader: "babel-loader"
			}
		},
		{
			test: /\.scss$/,
			use: ExtractTextPlugin.extract({
				fallback: "style-loader",
				use: ['css-loader', 'sass-loader']
			})
		}
	]
};

const mainApp = () => {
	return {
		entry: ['./res/js/main.js'],
		output: {
			path: path.join(__dirname, 'public'),
			filename: path.join('js', 'app.js')
		},
		module: webPackModuleSettings
	};
};

module.exports = [ mainApp ];
