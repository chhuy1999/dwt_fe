const dongTienThuan = document.getElementById('lineChart_dongTienThuan');

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return 'rgba(' + r + ',' + g + ',' + b + ')';
}

new Chart(dongTienThuan, {
    type: 'line',
    data: {
        labels: [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30',
        ],
        datasets: [
            {
                label: 'Chỉ số',
                data: [
                    80, 75, 70, 65, 60, 65, 70, 75, 80, 75, 70, 65, 80, 75, 70, 65, 60, 65, 70, 75, 80, 75, 70, 65, 80,
                    75, 70, 65, 60, 65,
                ],
                backgroundColor: 'rgb(0,165,255)',
                borderColor: 'rgba(0,165,255,0.75)',
                tension: 0,
                fill: false,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,
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
