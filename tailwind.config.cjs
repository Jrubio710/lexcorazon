/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
  keyframes: {
    'fade-in': {
      '0%': { opacity: 0, transform: 'translateY(20px)' },
      '100%': { opacity: 1, transform: 'translateY(0)' },
    },
    'slide-in-left': {
      '0%': { opacity: 0, transform: 'translateX(-100px)' },
      '100%': { opacity: 1, transform: 'translateX(0)' },
    },
    'slide-in-right': {
      '0%': { opacity: 0, transform: 'translateX(100px)' },
      '100%': { opacity: 1, transform: 'translateX(0)' },
    },
  },
  animation: {
    'fade-in': 'fade-in 1.2s ease-out forwards',
    'slide-in-left': 'slide-in-left 1s ease-out forwards',
    'slide-in-right': 'slide-in-right 1s ease-out forwards',
  },
}

  },
  plugins: [],
}
