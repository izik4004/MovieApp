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
        yellow: 'colors.amber',
      }
    },
spinner: (theme) => ({
      default: {
        color: '#dae1e7', // color you want to make the spinner
        size: '1em', // size of the spinner (used for both width and height)
        border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
        speed: '500ms', // the speed at which the spinner should rotate
      },
      // md: {
      //   color: theme('colors.red.500', 'red'),
      //   size: '2em',
      //   border: '2px',
      //   speed: '500ms',
      // },
    }),

  },
  variants: {
       extend: {},
  },
  plugins: [
    require('tailwindcss-spinner')({ className: 'spinner', themeKey: 'spinner' }),
  ],
}
