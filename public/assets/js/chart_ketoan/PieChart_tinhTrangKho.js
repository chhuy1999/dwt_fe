const tinhTrangKho = document.getElementById('pieChart_tinhTrangKho');

new Chart(tinhTrangKho, {
    type: 'pie',
    data: {
        labels: ['Hàng tốt', 'Hàng lỗi', 'Hàng hỏng'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [40, 75, 25],
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
                text: 'Đơn vị: Phần Trăm ( % )',
            },
        },
    },
});
