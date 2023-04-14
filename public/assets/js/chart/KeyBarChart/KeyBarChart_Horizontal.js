const KeyBarChart_Horizontal = document.getElementById('KeyBarChart_Horizontal');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_Horizontal, {
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
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: true,
        text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
});
