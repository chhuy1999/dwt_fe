const KeyBarChart_BorderRadius = document.getElementById('KeyBarChart_BorderRadius');

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}

new Chart(KeyBarChart_BorderRadius, {
    type: 'bar',
    data: {
        labels: ['Sản phẩm '],
        datasets: [
            {
                label: 'Sản phẩm 1',
                data: [65],
                backgroundColor: [dynamicColors()],
                borderWidth: 1,
            },
            {
                label: 'Sản phẩm 2',
                data: [80],
                backgroundColor: [dynamicColors()],
                borderWidth: 1,
            },
            {
                label: 'Sản phẩm 3',
                data: [42],
                backgroundColor: [dynamicColors()],
                borderWidth: 1,
            },
            {
                label: 'Sản phẩm 4',
                data: [50],
                backgroundColor: [dynamicColors()],
                borderWidth: 1,
            },
        ],
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



