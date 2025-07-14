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
                brown: {
                    50: '#f9f6f2',
                    100: '#f3ede7',
                    200: '#e6d6c3',
                    300: '#d2b89c',
                    400: '#b98c5a',
                    500: '#a66a2c',
                    600: '#8a4f1d',
                    700: '#6b3914',
                    800: '#4e270e',
                    900: '#2e1607',
                },
                cream: {
                    50: '#fffdf7',
                    100: '#fdf6e3',
                    200: '#f7ecd0',
                    300: '#f2e2b8',
                    400: '#e9d49a',
                    500: '#e0c47a',
                    600: '#c2a45e',
                    700: '#9e7d3d',
                    800: '#7a5a23',
                    900: '#4e370e',
                },
                gold: {
                    400: '#ffd700',
                    500: '#ffc300',
                    600: '#ffb300',
                },
            },
        },
    },
    safelist: [
        // Brown
        'bg-brown-50', 'bg-brown-100', 'bg-brown-200', 'bg-brown-300', 'bg-brown-400', 'bg-brown-500', 'bg-brown-600', 'bg-brown-700', 'bg-brown-800', 'bg-brown-900',
        'text-brown-50', 'text-brown-100', 'text-brown-200', 'text-brown-300', 'text-brown-400', 'text-brown-500', 'text-brown-600', 'text-brown-700', 'text-brown-800', 'text-brown-900',
        'border-brown-100', 'border-brown-200', 'border-brown-300', 'border-brown-400', 'border-brown-500', 'border-brown-600', 'border-brown-700', 'border-brown-800', 'border-brown-900',
        // Cream
        'bg-cream-50', 'bg-cream-100', 'bg-cream-200', 'bg-cream-300', 'bg-cream-400', 'bg-cream-500', 'bg-cream-600', 'bg-cream-700', 'bg-cream-800', 'bg-cream-900',
        'text-cream-50', 'text-cream-100', 'text-cream-200', 'text-cream-300', 'text-cream-400', 'text-cream-500', 'text-cream-600', 'text-cream-700', 'text-cream-800', 'text-cream-900',
        // Gold
        'bg-gold-400', 'bg-gold-500', 'bg-gold-600',
        'text-gold-400', 'text-gold-500', 'text-gold-600',
        'border-gold-400', 'border-gold-500', 'border-gold-600',
    ],

    plugins: [forms],
};
