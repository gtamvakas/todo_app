const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
    	screens: {
            'xxs': '100px',
    		'xs': '453px',
    		...defaultTheme.screens,
    	},
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height: {
                '128': '39rem',
            }
        },

    },

    plugins: [require('@tailwindcss/forms')],
};
