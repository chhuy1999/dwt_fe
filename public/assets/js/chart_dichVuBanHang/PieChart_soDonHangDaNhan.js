const ctx = document.getElementById('pieChart_soDonHangDaNhan');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Đã nhận', 'Xuất bán', 'Từ chối'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [80, 50, 30],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: [
                {
                    scaleLabel: {
                        display: true,
                        labelString: 'probability',
                    },
                    ticks: {
                        beginAtZero: true,
                    },
                },
            ],
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
                text: 'Đơn vị: Đơn hàng',
            },
        },
    },
});
