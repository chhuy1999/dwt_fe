Chart.register(ChartDataLabels);

const ctx = document.getElementById("doughnutChiSo");

new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Đã có hướng giải quyết", "Đã giải quyết", "Không thể giải quyết", "Không xác định được nguyên nhân"],
        datasets: [
            {
                label: "Chỉ số",
                data: [12, 19, 3, 5],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 2,

        plugins: {
            stacked100: { enable: true, replaceTooltipLabel: false },
            legend: {
                display: false,
            },
            datalabels: {
                formatter: function (value) {
                    return Math.round(value) + '%';
                },
                color: "white",
            },
            tooltip: {
                padding: 2,
                titleFont: {
                    size: 10,
                },
                bodyFont: {
                    size: 10,
                },
                
            },
        },
    },
});
