const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'music-dark-gray': '#1D1D1D',
                'music-red': '#951D1D',
                'music-stone': '#615050',
            },
            dropShadow: {
                'navbar': [
                    '0 20px 13px rgb(0 0 0 / 0.09)',
                    '0 8px 5px rgb(0 0 0 / 0.09)'
                ]
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
