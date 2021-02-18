module.exports = {
  purge: [],
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      animation: {
         'spin-slow': 'spin 3s linear infinite',
        }
    },
  },
  variants: {
  	animation: ['responsive', 'motion-safe', 'motion-reduce'],
    extend: {},
  },
  plugins: [],
}
