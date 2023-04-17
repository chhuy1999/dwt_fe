const KeyOtherChart_Bubble = document.getElementById("KeyOtherChart_Bubble");

new Chart(KeyOtherChart_Bubble, {
    type: "bubble",
    data: {
        // labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
        datasets: [{
            label: 'First Dataset',
            data: [{
              x: 20,
              y: 30,
              r: 15
            }, {
              x: 40,
              y: 10,
              r: 10
            }],
            backgroundColor: 'rgb(255, 99, 132)'
          }]
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
              position: 'top',
            },
            title: {
              display: true,
              text: 'Chart.js Doughnut Chart'
            }
          }
    },
});

