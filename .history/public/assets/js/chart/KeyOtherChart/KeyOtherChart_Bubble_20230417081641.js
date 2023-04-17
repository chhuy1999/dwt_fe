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


new Chart(KeyOtherChart_Bubble, {
    type: "scatter",
    data: {
        // labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
        // datasets: [
        //     {
        //         label: "Chỉ số 1",
        //         data: [12, 19, 3, 5],
        //         backgroundColor: "rgb(0,165,255)",
        //         borderColor: "rgba(0,165,255,0.75)",
        //         borderWidth: 1,
        //     },
        //     {
        //       label: "Chỉ số 2",
        //       data: [5, 10, 18, 9],
        //       backgroundColor: "rgb(255,165,0)",
        //       borderColor: "rgba(255,165,0,0.75)",
        //       borderWidth: 1,
        //   },
        // ],
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
        }]
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
          text: 'Chart.js Scatter Chart'
        }
      }
    },
});


