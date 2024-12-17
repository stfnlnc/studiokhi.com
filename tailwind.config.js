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
            colors: {
                "sk-dark": "#191919",
                "sk-light": "#FFFFFF",
                "sk-grey": "#808182",
                "sk-dark-grey": "#3F3E3E",
                "sk-light-grey": "#E0E0E0",
                "sk-beige": "#EAE0D6",
                "sk-green": "#D3E0D3",
                "sk-blue": "#CDDFE6",
                "sk-purple": "#DAD6EA",
                "sk-danger": "#F68282",
                "sk-warning": "#F3DA80",
                "sk-success": "#B9D798",
                "sk-info": "#B8D3F0",
            },
        },
    },

    plugins: [forms],
};
