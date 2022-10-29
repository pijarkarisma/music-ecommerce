/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
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
  plugins: [],
}
