const KeyScales_MinMax = document.getElementById("KeyScales_MinMax");

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}

new Chart(KeyScales_MinMax, {
    type: "line",
    data: {
        labels: [
            "T1",
            "T2",
            "T3",
            "T4",
            "T5",
            "T6",
            "T7",
            "T8",
            "T9",
            "T10",
            "T11",
            "T12",
        ],
        datasets: [
            {
                label: "Ngày",
                data: [10, 30, 40, 20, 25, 44, -10],
                backgroundColor: "rgb(255, 99, 132)",
                borderColor: "rgb(255, 99, 132)",
            },
            
            {
                label: "Tháng",
                data: [30, 33, 22, 19, 11, 20, 30],
                backgroundColor: "rgb(54, 162, 235)",
                borderColor: "rgb(54, 162, 235)",
            },
            {
                label: "Năm",
                data: [30, 33, 22, 19, 11, 10, 40],
                backgroundColor: "rgb(71,255,0)",
                borderColor: "rgba(71,255,0,0.75)",
            },
        ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
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

