const tiLeDoiTra = document.getElementById('pieChart_tiLeDoiTra');

new Chart(tiLeDoiTra, {
    type: 'pie',
    data: {
        labels: ['Đổi trả', 'Tổng số đơn hàng đã nhận'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [80, 50],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
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
