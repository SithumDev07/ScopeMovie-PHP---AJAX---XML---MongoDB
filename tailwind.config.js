/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        "scope-regular": "Scope-Movies-Regular",
        "scope-medium": "Scope-Movies-Medium",
        "scope-thin": "Scope-Movies-Thin",
      },
      backgroundImage: {
        "home-featured": "url('../assets/images/dune.jpg')",
        logo: "url('../assets/images/ScopeMovies.png')",
      },
      colors: {
        "scope-white": "#ffffff",
        "scope-gold": "#F9BB28",
        "scope-blue": "#1E57FF",
      },
    },
  },
  plugins: [],
};
