module.exports = {
  content: [
    // set the path to scann/watch files https://tailwindcss.com/docs/content-configuration
    "./site/templates/**/*.{twig,php}",
    "./site/snippets/**/*.{twig,php}",
  ],
  theme: {
    extend: {
      // extend existing styles by custom styles
      colors: {
        customColor: "#90d16d",
      },
    },
  },
  plugins: [],
};
