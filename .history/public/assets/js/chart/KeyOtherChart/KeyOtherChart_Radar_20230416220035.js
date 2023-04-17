const KeyOtherChart_Radar = document.getElementById("KeyOtherChart_Radar");

new Chart(KeyOtherChart_Radar, {
    type: "radar",
    data: {
        labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
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
      plugins: {
        title: {
          display: true,
          text: 'Chart.js Radar Chart'
        }
      }
    },
});
