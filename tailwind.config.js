/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*"],
  safelist: [
    'container', 
    'without-apps-footer', 
    'flex', 
    'flex-col',
    'items-center', 
    'gap-6', 
    'text-center',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

