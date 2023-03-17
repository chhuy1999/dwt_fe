const ctx = document.getElementById('pieChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Nhân sự', 'Marketing', 'Tuyển Dụng', 'Kiếm Soát'],
        datasets: [
            {
                label: 'Chỉ số',
                data: [12, 19, 3, 5],
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
                display: false,
                
            },
            tooltip: { enabled: true },
        },
    },
});
