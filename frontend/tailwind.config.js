
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js,php}",
    "!./node_modules/**",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          navy: "#0F172A",
          gold: "#FBBF24",
        },
      },
    },
  },
  plugins: [],
};
