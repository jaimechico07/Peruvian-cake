/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.{html,php}",
    "./views/**/*.{html,php}",
    "./views/**/**/*.{html,php}",
    "./components/*.{html,php}",
    "*.{html,php}",
  ],
  theme: {
    fontFamily: {
      "sans-niramit": ["'Niramit'", "'sans-serif'"],
      "sans-bellefair": ["'Bellefair'", "'serif'"],
      //"sans-laila": ["'Laila'", "'sans-serif'"], // Tilde invertida
      "arima-madurai": ["'Arima Madurai'", "'cursive'"],
    },
    extend: {
      fontSize: {},
      
      backgroundImage: {
        "primary-pink-100":
          "linear-gradient(180deg, rgba(241, 191, 226, 0.19) 0%, rgba(185, 94, 110, 0) 100%, #EBB1A6 100%)",
        "primary-pink-200":
          "linear-gradient(180deg, rgba(165, 202, 210, 0.39) 0%, rgba(255, 123, 137, 0.66) 100%)",
        "primary-pink-300":
          "linear-gradient(180deg, #FFBACD 0%, rgba(136, 113, 144, 0.28) 100%)",
      },
      colors: {
        "primary-100": "#FAE4E8",
        "primary-200": "#EC91A1",
        "primary-300": "#E7768A",
        "primary-400": "#B95E6E",
        "primary-500": "#727272",
        "primary-600": "#f5f5f5",
      },
      // NO ELIMINAR
      container: {
        center: true,
        padding: {
          DEFAULT: "1rem",
          md: "4rem",
        },
      },
    },
  },
  plugins: [],
};
