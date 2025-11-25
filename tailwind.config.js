import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/livewire-ui/core/src/View/**/*.php',
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
                violet: {
                    50: '#f5f3ff',
                    100: '#ede9fe',
                    200: '#ddd6fe',
                    300: '#c4b5fd',
                    400: '#a78bfa',
                    500: '#8b5cf6',  // O 500 é o mais usado
                    600: '#7c3aed',  // <- Seu bg-violet-600
                    700: '#6d28d9',
                    800: '#5b21b6',
                    900: '#4c1d95',
                },
            },
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/forms')
    ],
};
