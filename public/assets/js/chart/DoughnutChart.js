const doughnut = document.getElementById('doughnutChart');

new Chart(doughnut, {
    type: 'doughnut',
    data: {
        labels: ['Nhân sự', 'Marketing', 'Tuyển Dụng', 'Kiếm Soát'],
        datasets: [
            {
                label: '# of Votes',
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
