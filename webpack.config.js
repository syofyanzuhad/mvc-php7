const path = require('path');

module.exports = {
    entry: './Resources/index.js',
    output: {
        filename: "main.js",
        path: path.resolve(__dirname, 'Public/js')
    },
    mode: "production",
    module: {
        rules: [ 
            {
                test: /\.css$/,
                use: [ 'style-loader', 'css-loader' ]
            }
        ]
    }
}
