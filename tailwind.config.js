import defaultTheme from 'tailwindcss/defaultTheme';
const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                biru: '#3e31fa', 
                biruMuda: '#d9e6ff',
                biruHover: '#2317d4', 
                abu: '#4c4f6d',
                gelap: '#0f2145',
                agakgelap: '#354970'
              },
        },
    },
    plugins: [],
};
