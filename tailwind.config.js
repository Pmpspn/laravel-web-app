module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            animation: {
                'spin-slow': 'spin 3s linear infinite',
            },
            dropShadow: {
                'white': '0 10px 10px rgba(255, 255, 255, 0.45)',
            }
        }
    },
    keyframes: {
        wiggle: {
            '0%, 100%': {transform: 'rotate(-3deg)'},
            '50%': {transform: 'rotate(3deg)'},
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
