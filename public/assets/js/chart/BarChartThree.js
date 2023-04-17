const BarChartThree = document.getElementById('BarChartThree');

new Chart(BarChartThree, {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Min and Max Settings'
        }
      },
      scales: {
        y: {
          min: 10,
          max: 50,
        }
      }
    },
});
