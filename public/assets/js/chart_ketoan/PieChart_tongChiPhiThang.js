const tongChiPhiThang = document.getElementById('pieChart_tongChiPhiThang');

new Chart(tongChiPhiThang, {
    type: 'pie',
    data: {
        labels: ['Văn phòng', 'Kênh OTC', 'Kênh ETH', 'Kênh MT', 'Kênh ONL/TMĐT'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [40, 75, 25, 90, 15],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,

        scales: {
            y: {
                scaleLabel: {
                    display: true,
                    labelString: 'probability',
                },
                ticks: {
                    beginAtZero: true,
                },
            },
        },
        plugins: {
            legend: {
                position: 'top',
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
