const KeyOtherChart_Scatter = document.getElementById("KeyOtherChart_Scatter");

new Chart(KeyOtherChart_Scatter, {
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
          label: 'First Dataset',
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
        }]
    },
    options: {
      responsive: true,
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
