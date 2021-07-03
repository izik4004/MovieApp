module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({

        'hero-pattern': "url('/img/joker.jpg')",

        'footer-texture': "url('/img/footer-texture.png')",
       }),
       backgroundOpacity: {

        '10': '0.1',

        '20': '0.2',

        '95': '0.95',
       },
       fontSize: {

        'xs': '.75rem',
 
        'sm': '.875rem',
 
        'tiny': '.875rem',
         'base': '1rem',
         'lg': '1.125rem',
         'xl': '1.25rem',
         '2xl': '1.5rem',
 
        '3xl': '1.875rem',
 
        '4xl': '2.25rem',
         '5xl': '3rem',
         '6xl': '4rem',
 
        '7xl': '5rem',
       },
      width: {
        '96': '24rem',
      },
      colors: {
        redish: '#DD0710',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
