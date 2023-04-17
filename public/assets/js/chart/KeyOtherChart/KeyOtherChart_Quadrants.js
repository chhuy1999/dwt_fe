const KeyOtherChart_Quadrants = document.getElementById("KeyOtherChart_Quadrants");

new Chart(KeyOtherChart_Quadrants, {
  type: 'scatter',
  data: {
    datasets: [
      {
        label: 'Dataset 1',
        // data: Utils.points(NUMBER_CFG),
        borderColor: "rgb(255, 99, 132)",
        backgroundColor: ['rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 0.5)', 'rgba(54, 162, 235, 0.5)'],
      },
      {
        label: 'Dataset 2',
        // data: Utils.points(NUMBER_CFG),
        borderColor: "rgb(54, 162, 235)",
        backgroundColor: ['rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 0.5)', 'rgba(54, 162, 235, 0.5)'],
      }
    ]
  },
  options: {
    responsive: true,
      maintainAspectRatio: false,
    plugins: {
      quadrants: {
        topLeft: "rgb(255, 99, 132)",
        topRight: "rgb(54, 162, 235)",
        bottomRight: "rgb(75, 192, 192)",
        bottomLeft: "rgb(255, 205, 86)",
      }
    }
  },
  plugins:  {
    id: 'quadrants',
    beforeDraw(chart, args, options) {
      const {ctx, chartArea: {left, top, right, bottom}, scales: {x, y}} = chart;
      const midX = x.getPixelForValue(0);
      const midY = y.getPixelForValue(0);
      ctx.save();
      ctx.fillStyle = options.topLeft;
      ctx.fillRect(left, top, midX - left, midY - top);
      ctx.fillStyle = options.topRight;
      ctx.fillRect(midX, top, right - midX, midY - top);
      ctx.fillStyle = options.bottomRight;
      ctx.fillRect(midX, midY, right - midX, bottom - midY);
      ctx.fillStyle = options.bottomLeft;
      ctx.fillRect(left, midY, midX - left, bottom - midY);
      ctx.restore();
    }
  }
});
