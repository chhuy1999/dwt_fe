const KeyOtherChart_Radar = document.getElementById("KeyOtherChart_Radar");

new Chart(KeyOtherChart_Radar, {
    type: "radar",
    data: {
        labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
        datasets: [
            {
                label: "Chỉ số 1",
                data: [12, 19, 3, 5],
                borderWidth: 1,
            },
            {
              label: "Chỉ số 2",
              data: [18, 10, 18, 1],
              borderWidth: 1,
          },
        ],
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
