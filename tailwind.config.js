module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      aspectRatio: {
        '9/16': '9 / 16',
        '3/4': '3 /4',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      datatables: true,
    }),
  ],
}