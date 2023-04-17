const doanhThuToanCongTy = document.getElementById('pieChart_doanhThuToanCongTy');

new Chart(doanhThuToanCongTy, {
    type: 'pie',
    data: {
        labels: ['Kênh OTC', 'Kênh ETH', 'Kênh MT', 'Kênh ONL/TMĐT'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [80, 50, 30, 65],
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
