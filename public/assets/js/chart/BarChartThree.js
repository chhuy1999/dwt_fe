const BarChartThree = document.getElementById('BarChartThree');

new Chart(BarChartThree, {
  type: "bar",
  data: {
      labels: ["Sản phẩm 1", "Sản phẩm 2", "Sản phẩm 3", "Sản phẩm 4"],
      datasets: [
          {
              label: "Chỉ số",
              data: [5, 10, 15, 10],
              backgroundColor: [
                  "rgba(255, 99, 132)",
                  "rgba(255, 159, 64)",
                  "rgba(255, 205, 86)",
                  "rgba(75, 192, 192)",
              ],
              borderWidth: [
                  "rgba(255, 99, 132)",
                  "rgba(255, 159, 64)",
                  "rgba(255, 205, 86)",
                  "rgba(75, 192, 192)",
              ],
          },
      ],
  },
  options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              display: false
          },
          x: {
              display: false
          }
      },
      plugins: {
          legend: {
              display: false,
          },
          tooltip: { enabled: true },
      },
  },
});

