const KeyOtherChart_Pie = document.getElementById("KeyOtherChart_Pie");

new Chart(KeyOtherChart_Pie, {
  type: "pie",
  data: {
      // labels: ["Công việc 1", "Công việc 2", "Công việc 3", "Công việc 4"],
      datasets: [
          {
              label: "Chỉ số",
              data: [12, 19, 3, 5],
              borderWidth: 1,
          },
      ],
  },
  options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              display: false,
              scaleLabel: {
                  display: true,
                  labelString: "probability",
              },
              ticks: {
                  beginAtZero: true,
              },
          },
          x: {
              display: false,
          },
      },
      plugins: {
          legend: {
              display: false,
              position: 'top',
          },
          tooltip: { enabled: true },
          title: {
            display: true,
            text: 'Chart.js Pie Chart'
          }
      },
  },
});
