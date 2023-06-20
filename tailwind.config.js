/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
  ],
  safelist: [
    {
      pattern: /col-span-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']

    },
    {
      pattern: /grid-cols-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']
    },
    'bg-brand-purple',
    'text-brand-purple'
  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      '2xl': '1400px',
      '2xlx': '1600px'
    },
    extend: {
      colors: {
        'brand-light-green': '#BECA31',
        'brand-dark-green': '#236E5E',
        'brand-white': '#FFFFFF',
        'brand-black': '#262626',
        'brand-grey': '#808080'
      },
      fontSize: {
        h1: ['50px', '58px'],
        h2: ['46px', '54px'],
        h3: ['40px', '48px'],
        h4: ['24px', '32px'],
        h5: ['22px', '30px'],
        p: ['20px', '28px'],
        'footer-p': ['16px', '24px'],
        'small-h2': ['28px', '36px'],
        'small-h3': ['24px', '32px'],
        'small-h4': ['20px', '28px'],
        'small-p': ['16px', '24px']
      },
      fontFamily: {
        'lato': "'Lato', 'sans-serif'"
      }
    },
  },
  plugins: [],
}

