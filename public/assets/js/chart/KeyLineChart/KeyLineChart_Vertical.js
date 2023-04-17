const KeyLineChart_Vertical = document.getElementById("KeyLineChart_Vertical");

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ", 0.5)";
}

new Chart(KeyLineChart_Vertical, {
    type: "line",
    data: {
      labels: [
        "T1",
        "T2",
        "T3",
        "T4",
        "T5",
        "T6",
        "T7"
    ],
      datasets: [{
        axis: 'y',
        label: 'My First Dataset',
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        indexAxis: "y",
        scales: {
            x: {
                beginAtZero: true,
            },
        },
        plugins: {
          title: {
            display: true,
            text: 'Chart.js Vertical Chart'
          },
        },
    },
});
