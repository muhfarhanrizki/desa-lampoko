// tailwind.config.js
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
            backgroundImage: {
                // Gradient untuk hero atau halaman beranda
                'hero-pattern': 'linear-gradient(to right, #e0f2fe, #f0fdf4)', // dari sky-100 ke emerald-50
                'footer-pattern': 'linear-gradient(to bottom, #f0fdf4, #ecfdf5)', // emerald-50 to emerald-100
            },
            keyframes: {
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'slide-in-left': {
                    '0%': { transform: 'translateX(-100%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                'zoom-in': {
                    '0%': { transform: 'scale(0.8)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
            },
            animation: {
                'fade-up': 'fade-up 0.8s ease-out',
                'slide-in-left': 'slide-in-left 0.8s ease-out',
                'zoom-in': 'zoom-in 0.5s ease-out',
            },
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/line-clamp'),
    ],
};
