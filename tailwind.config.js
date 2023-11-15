import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
            },
            // font
            fontSize: {
                'xxs': '.65rem',
                'xs': '.75rem',
                'sm': '.875rem',
                'md': '.9375rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                '7xl': '5rem',
                '8xl': '6rem',
                '9xl': '8rem',
            },
            // color
            colors: {
                primary: "#cb0e26",
                secondary: "#1A1A1A",
                info: "#F15A59",
                danger: "#cb0e26",
                success: "#5D9C59",
                warning: "#FD8D14",
                light: "#F2F2F2",
                dark: "#070A52",
                black: "#000000",
                white: "#FFFFFF",
                gray: {
                    100: "#F2F2F2",
                    200: "#E0E0E0",
                    300: "#BDBDBD",
                    400: "#464646",
                    500: "#4F4F4F",
                    600: "#333333",
                    700: "#1A1A1A",
                    800: "#070A52",
                    900: "#29324d",
                },
                orange: {
                    100: "#FFF3E0",
                    200: "#FFE0B2",
                    300: "#FFCC80",
                    400: "#FFB74D",
                    500: "#FFA726",
                    600: "#FB8C00",
                    700: "#F57C00",
                    800: "#EF6C00",
                    900: "#E65100",
                },
                red: {
                    100: "#FFEBEE",
                    200: "#FFCDD2",
                    300: "#EF9A9A",
                    400: "#E57373",
                    500: "#EF5350",
                    600: "#F44336",
                    700: "#E53935",
                    800: "#D32F2F",
                    900: "#C62828",
                },
            }
        },
        // font weight
        fontWeight: {
            hairline: 100,
            'extra-light': 100,
            thin: 200,
            light: 300,
            normal: 400,
            medium: 500,
            semibold: 600,
            bold: 700,
            extrabold: 800,
            'extra-bold': 800,
            black: 900,
        },
        // colors
        colors: {
            'primary-red': '#EE1935',
            'secondary-red': '#C40F27',
            'light-pink': '#FFEFF3',
            'stone': '#e4e4e4',
        },
    },

    plugins: [require('flowbite/plugin')],
};
