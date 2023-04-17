const doanhSoVungDiaBan = document.getElementById('barChart_doanhSoVungDiaBan');

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}

new Chart(doanhSoVungDiaBan, {
    type: 'bar',
    data: {
        labels: ['Vùng 1', 'Vùng 2', 'Vùng 3', 'Vùng 4', 'Vùng 5', 'Vùng 6'],
        datasets: [
            {
                label: 'Chỉ tiêu',
                fillColor: 'blue',
                data: [1, 5, 9, 7, 4, 3],
            },
            {
                label: 'Thực hiện',
                fillColor: 'red',
                data: [8, 4, 5, 7, 1, 9],
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
        plugins: {
            legend: {
                labels: {
                    usePointStyle: true,
                    pointStyle: 'rectRounded',
                },
            },
            tooltip: { enabled: false },
            title: {
                display: true,
                text: 'Đơn vị: Việt Nam Đồng ( VNĐ )',
            },
        },
    },
});
