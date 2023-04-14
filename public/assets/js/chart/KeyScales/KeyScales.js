const KeyScales = document.getElementById("KeyScales");

new Chart(KeyScales, {
    type: "line",
    data: {
        labels: [
            "T1",
            "T2",
            "T3",
            "T4",
            "T5",
            "T6",
            "T7",
            "T8",
            "T9",
            "T10",
            "T11",
            "T12",
        ],
        datasets: [
            {
                label: "Ngày",
                data: [10, 30, 40, 20, 25, 44, -10],
                backgroundColor: "rgb(255, 99, 132)",
                borderColor: "rgb(255, 99, 132)",
            },
        ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
        plugins: {
          title: {
            display: true,
            text: 'Chart.js Line Chart - Logarithmic'
          }
        },
        scales: {
          x: {
            display: true,
          },
          y: {
            display: true,
            type: 'logarithmic',
          }
        }
      },
    
});
