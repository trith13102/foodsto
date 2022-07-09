let showDropDownMenu = () => {
  let dropDownMenu = document.getElementById("drop-down-menu");
  if (dropDownMenu.classList.contains("hidden")) {
    dropDownMenu.classList.remove("hidden");
  } else {
    dropDownMenu.classList.add("hidden");
  }
};

// Bar chart
const ctx1 = document.getElementById("chart-1");
const myChart1 = new Chart(ctx1, {
  type: "line",
  data: {
    labels: [
      "Tháng 1",
      "Tháng 2",
      "Tháng 3",
      "Tháng 4",
      "Tháng 5",
      "Tháng 6",
      "Tháng 7",
      "Tháng 8",
      "Tháng 9",
      "Tháng 10",
      "Tháng 11",
      "Tháng 12",
    ],
    datasets: [
      {
        label: "Số lượt mua",
        data: [12, 19, 3, 5, 2, 3, 20, 21, 22, 23, 34, 12],
        fill: false,
        borderColor: "#3bb77e",
        tension: 0.1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    plugins: {
      legend: {
        labels: {
          // This more specific font property overrides the global property
          font: {
            size: 14,
            family: '"Roboto", sans-serif',
            weight: "500",
          },
        },
      },
    },
  },
});

// Pie chart
const ctx2 = document.getElementById("chart-2");
const myChart2 = new Chart(ctx2, {
  type: "pie",
  data: {
    labels: ["Thành công", "Thất bại"],
    datasets: [
      {
        label: "Số lượt mua",
        data: [19, 5],
        backgroundColor: ["rgba(46, 204, 113, 0.5)", "rgba(231, 76, 60, 0.5)"],
        borderColor: ["rgba(46, 204, 113, 1)", "rgba(231, 76, 60, 1)"],
        borderWidth: 2,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    plugins: {
      legend: {
        labels: {
          // This more specific font property overrides the global property
          font: {
            size: 14,
            family: '"Roboto", sans-serif',
            weight: "500",
          },
        },
      },
    },
  },
});
