const congviechoanthanh = document.getElementById('congviechoanthanh');

new Chart(congviechoanthanh, {
    type: "pie",
    data: {
        labels: ["Hoàn thành đúng hạn", "Hoàn thành muộn", "Quá hạn", "Đang thực hiện", "Đang chờ phê duyệt"],
        datasets: [
            {
                label: "Chỉ số",
                data: [200, 40, 40, 40, 40],
                borderWidth: 1,
            },
        ],
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
                display: false,
            },
            tooltip: { enabled: true },
        },
    },
});

// function dynamicColors() {
//     var r = Math.floor(Math.random() * 255);
//     var g = Math.floor(Math.random() * 255);
//     var b = Math.floor(Math.random() * 255);
//     return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
// }

// new Chart(congviechoanthanh, {
//     type: 'pie',
//     data: {
//         // labels: ['Tỉ lệ công việc hoàn thành '],
//         datasets: [
//             {
//                 label: 'Hoàn thành đúng hạn',
//                 data: [200],
//                 backgroundColor: [dynamicColors()],
//                 borderWidth: 1,
//             },
//             {
//                 label: 'Hoàn thành muộn',
//                 data: [40],
//                 backgroundColor: [dynamicColors()],
//                 borderWidth: 1,
//             },
//             {
//                 label: 'Quá hạn',
//                 data: [40],
//                 backgroundColor: [dynamicColors()],
//                 borderWidth: 1,
//             },
//             {
//                 label: 'Đang thực hiện',
//                 data: [40],
//                 backgroundColor: [dynamicColors()],
//                 borderWidth: 1,
//             },
//             {
//                 label: 'Đang chờ phê duyệt',
//                 data: [40],
//                 backgroundColor: [dynamicColors()],
//                 borderWidth: 1,
//             },
//         ],
//     },
//     options: {
//         responsive: true,
//         plugins: {
//           legend: {
//             position: 'top',
//           },
//           title: {
//             display: true
//           }
//         }
//       },
// });
