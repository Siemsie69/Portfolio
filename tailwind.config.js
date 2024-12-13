module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                darkBlack: '#000000',
                light: '#f7fafc',
            },
            fontFamily: {
                sans: ['Quicksand', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
