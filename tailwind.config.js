import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
content: [
'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
'./storage/framework/views/*.php',
'./resources/views/**/*.blade.php',
],

theme: {

extend: {
     height: {
        '600': '600px',
        '500': '500px',
        '400': '400px',
        '300': '300px',
        '200': '250px',
      },
fontFamily: {
sans: ['Figtree', ...defaultTheme.fontFamily.sans],
montserrat: ['Montserrat']

},
},
},

plugins: [forms],
};
