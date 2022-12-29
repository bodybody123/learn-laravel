/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        noteGreen: "#94b32e",
        noteRed: "#be503d"
      }
    },
  },
  plugins: [],
}
