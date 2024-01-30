/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'light-gray': '#F2F2F2',
        pink: '#FAA',
        blue: '#3dd2fd',
      },
    },
  },
  plugins: [],
};
