/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./mvc/views/adminView.php"],
  theme: {
    extend: {},
  },
  plugins: [],
};

// Chạy lệnh dưới đây để khởi động TailwindCSS
// npx tailwindcss -i ./public/css/tailwind/<pageView>.css -o ./public/css/<pageView>.css --watch
