/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'brand-yellow': '#FFF9D0',
        'brand-blue': '#CAF4FF',
      }
    },
  },
  plugins: [],
}
