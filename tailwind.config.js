import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'false',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                "sk-dark": "#191919",
                "sk-light": "#FFFFFF",
                "sk-grey": "#808182",
                "sk-dark-grey": "#3F3E3E",
                "sk-light-grey": "#E0E0E0",
                "sk-beige": "#EAE0D6",
                "sk-green": "#d3e0d3",
                "sk-blue": "#CDDFE6",
                "sk-purple": "#DAD6EA",
                "sk-danger": "#F68282",
                "sk-warning": "#F3DA80",
                "sk-success": "#B9D798",
                "sk-info": "#B8D3F0",
                "zinc": {
                    '50': '#f6f6f6',
                    '100': '#e7e7e7',
                    '200': '#d1d1d1',
                    '300': '#b0b0b0',
                    '400': '#888888',
                    '500': '#6d6d6d',
                    '600': '#5d5d5d',
                    '700': '#4f4f4f',
                    '800': '#454545',
                    '900': '#3d3d3d',
                    '950': '#191919',
                },
            },
        },
    },

    plugins: [forms],
};
