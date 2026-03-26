/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brand: { DEFAULT: '#16a34a', dark: '#166534', light: '#22c55e' },
      },
    },
  },
  plugins: [],
}
