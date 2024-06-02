/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/templates/*.php", "./app/Views/main/*.php"],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
};
