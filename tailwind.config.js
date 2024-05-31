import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import flowbite from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Ativa o modo escuro baseado em classe
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    // cores  primarias do app.css
                    50: '#f2f9f7',
                    100: '#d5f3e9',
                    200: '#a7e8d2',
                    300: '#5fd9b4',
                    400: '#21c995',
                    500: '#00A174',
                    600: '#008b64',
                    700: '#007653',
                    800: '#006342',
                    900: '#004e2c',
                    950: '#00341a',
                },
                slate: {
                    // cores modo escuro do app.css
                    800: '#18181b',
                    900: '#09090b',
                },
                gray: {
                    800: '#18181b', 
                    900: '#09090b', 
                },
            },
            is: {
                gray: {
                    800: '#18181b',
                },
            },
        },
    },

    plugins: [forms, typography, flowbite],
};
