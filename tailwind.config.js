/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    colors: {    
      'primary': '#402643',
      'primary-100': '#F5E0F0',
      'primary-200': '#ECC3E6',
      'primary-300': '#C693C3',
      'primary-400': '#8D608E',
      'primary-700': '#281330',
      'background': '#E5DDE8',
      'dismiss': '#928B93',
      'grey': '#C5C0C6',
      'grey-600': '#B7B2B8',
      'putih': '#FBF5FF',
      'neutral': '#f3f3f3',
      'hitam': '#181518',
      'hitam-400': '#746973',
      'info': '#545FC5',
      'info-700': '#1939B7'
    },
    extend: {
      fontFamily: {
        jakarta: ["jakarta", "sans-serif"],
      },
      lineHeight: {
        '150%': '150%' 
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

