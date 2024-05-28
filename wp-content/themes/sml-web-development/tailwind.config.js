/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./*.{php,html,js}",
    "./home-page-parts/*.{php,html,js}",
    "./contact-page-parts/*.{php,html,js}",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      }
    },
    screens: {
      'xs': '469px',
      ...defaultTheme.screens,
    },
    extend: {
      fontFamily: {
        display: 'Alegreya SC, serif',
        paragraph: 'Roboto Slab, serif',
        header: 'VT323, serif'
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
      backgroundImage: {
        'contact-form': "url('/wp-content/uploads/2024/05/parchment.png')",
        'mobile-nav': "linear-gradient(#D0AD76 30%, #928C85)",
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-animate')
  ],
}

