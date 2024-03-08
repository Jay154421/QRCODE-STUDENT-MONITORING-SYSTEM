module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily: {
          'inter': ['Inter', 'sans-serif'],
          'quicksand': ['Quicksand', 'sans-serif'],
        },
      },
    },
    plugins: [
        require('flowbite/plugin'),
      
    ],
  }