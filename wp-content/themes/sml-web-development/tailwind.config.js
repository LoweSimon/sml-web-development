/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./*.{php,html,js}",
    "./template-parts/*.{php,html,js}",
  ],
  theme: {
    container: {
      center: true,
    },
    screens: {
      'xs': '469px',
      ...defaultTheme.screens,
    },
    extend: {
      fontFamily: {
        display: 'Alegreya SC, serif',
      },
      colors: {
        "sp-brown": "var(--sp-brown)",
        "sp-blue": "var(--sp-blue)",
        "sp-light-brown": "var(--sp-light-brown)",
        "sp-grey": "var(--sp-grey)",
        "sp-dark-brown": "var(--sp-dark-brown)",
      },
      spacing: {
        "nav-gear": "-10%",
      },
      animation: {
        'spin-slow': 'spin 8s linear infinite',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-animate')
  ],
}

