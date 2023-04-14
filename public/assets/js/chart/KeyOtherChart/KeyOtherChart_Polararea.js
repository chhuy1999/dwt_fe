const KeyOtherChart_Polararea = document.getElementById("KeyOtherChart_Polararea");

new Chart(KeyOtherChart_Polararea, {
    type: "polarArea",
    data: {
        // labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
        datasets: [
            {
                label: "Chỉ số",
                data: [12, 19, 3, 5],
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
          text: 'Chart.js Polar Area Chart'
        }
      }
    },
});
