module.exports = {
    plugins: {   
      autoprefixer: {},
      '@fullhuman/postcss-purgecss': {
        content: ['./resources/**/*.blade.php', './resources/**/*.js'],
      },
    },
  };