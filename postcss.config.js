module.exports = {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
      '@fullhuman/postcss-purgecss': {
        content: ['./resources/**/*.blade.php', './resources/**/*.js'],
      },
    },
  };
  