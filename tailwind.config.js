module.exports = {
  content: [
    "**/*.{html,php}",
    "*/*.{html,php}",
    "./mvc/views/detailsView.php",
    "./mvc/views/cartView.php",
    "./mvc/views/checkoutView.php",
  ],
  darkMode: "class", // or 'media' or 'class'
  theme: {
    boxShadow: {
      "custom-shadow-1": "rgba(149, 157, 165, 0.2) 0px 8px 24px",
    },
    screens: {
      xs: "375px",
      sm: "576px",
      // => @media (min-width: 650px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "992px",
      // => @media (min-width: 1024px) { ... }

      xl: "1200px",
      // => @media (min-width: 1280px) { ... }

      "2xl": "1400px",
      // => @media (min-width: 1536px) { ... }
    },
    fontSize: {
      xs: ".75rem",
      sm: ".875rem",
      base: "1rem",
      lg: "1.125rem",
      xl: "1.25rem",
      title: "3.188rem",
      "2xl": "1.5rem",
      "3xl": "1.875rem",
      "4xl": "2.25rem",
      "5xl": "3rem",
      "6xl": "4rem",
      "7xl": "5rem",
    },
    fontFamily: {
      "primary-font": "'Open Sans', sans-serif",
      "great-vibes": "'Great Vibes', cursive",
    },

    extend: {
      spacing: {
        30: "7.5rem",
        0.75: "0.188rem",
        2.5: "0.75rem",
        26: "6.5rem",
        1.5: "0.375rem",
        7.5: "1.875rem",
        2.25: "0.625rem",
        15: "3.75rem",
        18: "4.5rem",
        7: "1.75rem",
        19: "4.75rem",
        12.5: "3.125rem",
      },
      colors: {
        "primary-color": "#3bb77e",
        "secondary-color": "#ffba43",
        "white-color": "#ffffff",
        "white-light-color": "#e6e6e6",
        "title-color": "#1c2137",
        "sub-title-color": "#ffba43",
        "body-text": "#4a4a4a",
        "descr-text": "#6c7689",
        "light-green-color": "#e2f9ee",
        "light-yellow-color": "#fff8ed",
        "warning-color": "#ff0000",
        "light-grey": "#f9faff",
        "whiten-bg-color": "#f9faff",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};

// Không cần tạo file mới chỉ cần
// 1. Thêm thẻ <link rel="stylesheet" href="public/css/tailwindCommon.css">
// 2. Chạy lệnh dưới đây để khởi động TailwindCSS
// npx tailwindcss -i ./public/css/tailwind/tailwindCommon.css -o ./public/css/tailwindCommon.css --watch
