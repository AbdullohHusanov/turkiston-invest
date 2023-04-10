/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/views/**/**/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      extend: {
          container: {
              screens: {
                  'sm': '600px',
                  'md': '728px',
                  'lg': '984px',
                  'xl': '1200px',
                  '2xl': '1496px',
              },
              center: true,
          }
      },
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
      require('tailwindcss-children'),
  ],
}
