const KeyOtherChart_Bubble = document.getElementById("KeyOtherChart_Bubble");



new Chart(KeyOtherChart_Bubble, {
    type: "bubble",
    data: {
        datasets: [{
          label: 'Dataset 1',
          data: [{
            x: 18,
            y: 25,
          }, {
            x: 11,
            y: 14,
          }, {
            x: 20,
            y: 10,
          },{
            x: 15,
            y: 5,
          },{
            x: 5,
            y: 10,
          },{
            x: 30,
            y: 35,
          },{
            x: 21,
            y: 5,
          }],
          backgroundColor: 'rgb(255, 99, 132)'
        },{
          label: 'Dataset 2',
          data: [{
            x: 1,
            y: 26,
          }, {
            x: 10,
            y: 11,
          }, {
            x: 28,
            y: 18,
          },{
            x: 34,
            y: 10,
          },{
            x: 18,
            y: 1,
          },{
            x: 20,
            y: 15,
          },{
            x: 11,
            y: 21,
          }],
          backgroundColor: 'rgb(255, 159, 64)'
        },{
          label: 'Dataset 3',
          data: [{
            x: 8,
            y: 5,
          }, {
            x: 31,
            y: 24,
          }, {
            x: 26,
            y: 19,
          },{
            x: 25,
            y: 15,
          },{
            x: 16,
            y: 19,
          },{
            x: 30,
            y: 35,
          },{
            x: 31,
            y: 12,
          }],
          backgroundColor: 'rgb(75, 192, 192)'
        },]
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
          text: 'Chart.js Bubble Chart'
        }
      }
    },
});



