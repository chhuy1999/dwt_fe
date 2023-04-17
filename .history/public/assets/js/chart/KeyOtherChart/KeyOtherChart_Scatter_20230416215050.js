const KeyOtherChart_Scatter = document.getElementById("KeyOtherChart_Scatter");

new Chart(KeyOtherChart_Scatter, {
    type: "scatter",
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
              data: [5, 10, 18, 9],
              borderWidth: 1,
          },
        ],
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
