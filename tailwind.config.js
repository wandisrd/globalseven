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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ch_grey: '#F4F6FF',
                ch_gold: '#FBAF40',
                ch_orange: '#EB8317',
                ch_blue: '#10375C',
                ch_broen: '#2b2c35',
              },
        },
    },

    plugins: [forms],
};
