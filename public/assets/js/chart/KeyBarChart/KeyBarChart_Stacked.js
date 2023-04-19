const KeyBarChart_Stacked = document.getElementById('KeyBarChart_Stacked');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_Stacked, {
  type: 'bar',
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
        label: 'Dataset 1',
        data: [0, 20, 40, 60, -60, 10, -20, 150, 150, -50, -105, 160, -190],
        backgroundColor: 'rgb(255, 99, 132)',
      },
      {
        label: 'Dataset 2',
        data: [0, 20, 20, -60, 60, 120, -20, 180, 120, 125, -105, 110, 170],
        backgroundColor: 'rgb(54, 162, 235)',
      },
      {
        label: 'Dataset 3',
        data: [0, 26, 10, 48, -94, 118, -10, 80, 20, 25, 115, -10, 70],
        backgroundColor: 'rgb(75, 192, 192)',
      },
    ]
  },
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Bar Chart - Stacked'
      },
    },
    responsive: true,
      maintainAspectRatio: false,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
});
