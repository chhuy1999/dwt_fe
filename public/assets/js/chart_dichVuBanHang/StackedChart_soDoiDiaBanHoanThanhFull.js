Chart.register(ChartjsPluginStacked100.default);
new Chart(document.getElementById('stackedChart_soDoiDiaBanHoanThanhFull'), {
    type: 'bar',
    data: {
        labels: ['Vùng 1', 'Vùng 2', 'Vùng 3', 'Vùng 4', 'Vùng 5', 'Vùng 6'],
        datasets: [
            {
                label: 'Số đội',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                    'rgba(255, 26, 104, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                    'rgba(255, 26, 104, 1)',
                ],
                borderWidth: 1,
            },
            {
                label: 'Địa bàn hoàn thành doanh số',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1,
            },
            {
                label: 'Tổng số đội',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(220,0,255, 0.2)',
                    'rgba(220,0,255, 0.2)',
                    'rgba(220,0,255, 0.2)',
                    'rgba(220,0,255, 0.2)',
                    'rgba(220,0,255, 0.2)',
                    'rgba(220,0,255, 0.2)',
                ],
                borderColor: [
                    'rgba(220,0,255, 1)',
                    'rgba(220,0,255, 1)',
                    'rgba(220,0,255, 1)',
                    'rgba(220,0,255, 1)',
                    'rgba(220,0,255, 1)',
                    'rgba(220,0,255, 1)',
                ],
                borderWidth: 1,
            },
            {
                label: 'Địa bàn của vùng',
                data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()],
                backgroundColor: [
                    'rgba(118,255,0, 0.2)',
                    'rgba(118,255,0, 0.2)',
                    'rgba(118,255,0, 0.2)',
                    'rgba(118,255,0, 0.2)',
                    'rgba(118,255,0, 0.2)',
                    'rgba(118,255,0, 0.2)',
                ],
                borderColor: [
                    'rgba(118,255,0, 1)',
                    'rgba(118,255,0, 1)',
                    'rgba(118,255,0, 1)',
                    'rgba(118,255,0, 1)',
                    'rgba(118,255,0, 1)',
                    'rgba(118,255,0, 1)',
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,

        aspectRatio: 3,

        plugins: {
            stacked100: { enable: true, replaceTooltipLabel: false },
            legend: {
                display: false,
            },
            datalabels: {
                formatter: function (value) {
                    return Math.round(value) + '%';
                },
            },
            title: {
                display: true,
                text: 'Đơn vị: Địa bàn/đội',
            },
            tooltip: { enabled: true },
        },
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
