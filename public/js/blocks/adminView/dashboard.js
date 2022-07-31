window.addEventListener("load", (event) => {
  document.querySelector(".charts .line-chart").innerHTML = `
    <div class="loader-wrapper">
      <div id="loader"></div>
    </div>`;

  document.querySelector(".charts .donut-chart").innerHTML = `
  <div class="loader-wrapper">
    <div id="loader"></div>
  </div>`;

  fetch("admin/crud/get_charts_data")
    .then((response) => response.json())
    .then((data) => {
      document.querySelector(".charts .line-chart").innerHTML = `
      <h3 class="title">Tăng trưởng theo quý</h3>
      <canvas></canvas>`;

      document.querySelector(".charts .donut-chart").innerHTML = `
      <h3 class="title">Tình trạng tất cả đơn hàng </h3>
      <canvas></canvas>`;

      //  Line chart
      const lineChartLabels = ["Quý 1", "Quý 2", "Quý 3", "Quý 4"];

      const lineChartData = {
        labels: lineChartLabels,
        datasets: [
          {
            label: "Tỉ lệ tăng trưởng",
            backgroundColor: "#3bb77e",
            borderColor: "#3bb77e",
            data: [data.line[0], data.line[1], data.line[2], data.line[3]],
            tension: 0.2,
          },
        ],
      };

      const lineChartConfig = {
        type: "line",
        data: lineChartData,
        options: {},
      };

      const lineChart = new Chart(
        document.querySelector(".charts .line-chart canvas"),
        lineChartConfig
      );

      // Donut chart
      const donutChartData = {
        labels: ["Thất bại", "Thành công"],
        datasets: [
          {
            label: "My First Dataset",
            data: [data.donut[0], data.donut[1]],
            backgroundColor: ["#ffba43", "#3bb77e"],
            hoverOffset: 4,
          },
        ],
      };

      const donutChartConfig = {
        type: "doughnut",
        data: donutChartData,
      };

      const donutChart = new Chart(
        document.querySelector(".charts .donut-chart canvas"),
        donutChartConfig
      );
    });
});
