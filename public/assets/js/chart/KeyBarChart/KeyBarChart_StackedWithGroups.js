const KeyBarChart_StackedWithGroups = document.getElementById('KeyBarChart_StackedWithGroups');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_StackedWithGroups, {
  
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
        label: 'Fully Rounded',
        data: [0, 20, 20, -60, 60, 120, -20, 180, 120, 125, -105, 110, 170],
        borderColor: 'rgb(54, 162, 235)',
        backgroundColor: 'rgb(54, 162, 235, 0.5)',
        borderWidth: 2,
        borderRadius: 2,
        borderSkipped: false,
      },
      {
        label: 'Small Radius',
        data: [0, 26, 10, 48, -94, 118, -10, 80, 20, 25, 115, -10, 70],
        borderColor: 'rgb(255, 99, 132)',
        backgroundColor: 'rgb(255, 99, 132, 0.5)',
        borderWidth: 2,
        borderRadius: 5,
        borderSkipped: false,
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Bar Chart'
      }
    }
  },
});
