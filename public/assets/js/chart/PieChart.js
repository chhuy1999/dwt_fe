const ctx = document.getElementById("pieChart");

new Chart(ctx, {
    type: "pie",
    data: {
        labels: ["Công việc 1", "Công việc 2", "Công việc 3", "Công việc 4"],
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
        scales: {
            y: {
                display: false,
                scaleLabel: {
                    display: true,
                    labelString: "probability",
                },
                ticks: {
                    beginAtZero: true,
                },
            },
            x: {
                display: false,
            },
        },
        plugins: {
            legend: {
                display: false,
            },
            tooltip: { enabled: true },
        },
    },
});
