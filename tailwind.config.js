import defaultTheme from 'tailwindcss/defaultTheme';

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
                sans: ['Lexend', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
            'log_dev': "url('http://127.0.0.1:8000/assets/thumb-nails/Logistics-development.png')",
            'our_ev': "url('http://127.0.0.1:8000/assets/thumb-nails/our-environment.png')",
            'dig': "url('http://127.0.0.1:8000/assets/thumb-nails/digitizing.png')",
            'log_dev_2': "url('http://127.0.0.1:8000/assets/thumb-nails/Logistics-development-2.png')",


      }

        },
    },
    plugins: [],
};
