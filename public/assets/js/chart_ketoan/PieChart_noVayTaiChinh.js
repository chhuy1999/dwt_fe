const noVayTaiChinh = document.getElementById('pieChart_noVayTaiChinh');

new Chart(noVayTaiChinh, {
    type: 'pie',
    data: {
        labels: ['Nợ vay tài chính quá hạn', 'Nợ vay tài chính phải trả'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [20, 50],
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
