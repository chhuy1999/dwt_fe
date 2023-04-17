const congNoPhaiThu = document.getElementById('pieChart_congNoPhaiThu');

new Chart(congNoPhaiThu, {
    type: 'pie',
    data: {
        labels: ['Số công nợ quá hạn', 'Số công nợ phải thu'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [40, 75],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,
        scales: {
            yAxes: {
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
