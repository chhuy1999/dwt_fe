const KeyScales_MinMax = document.getElementById("KeyScales_MinMax");

function channelValue(x, y, values) {
    return x < 0 && y < 0 ? values[0] : x < 0 ? values[1] : y < 0 ? values[2] : values[3];
  }
  
  function colorize(opaque, context) {
    const value = context.raw;
    const x = value.x / 100;
    const y = value.y / 100;
    const r = channelValue(x, y, [250, 150, 50, 0]);
    const g = channelValue(x, y, [0, 50, 150, 250]);
    const b = channelValue(x, y, [0, 150, 150, 250]);
    const a = opaque ? 1 : 0.5 * value.v / 1000;
  
    return 'rgba(' + r + ',' + g + ',' + b + ',' + a + ')';
  }

new Chart(KeyScales_MinMax, {
    type: 'bubble',
    data: data,
    options: {
      aspectRatio: 1,
      plugins: {
        legend: false,
        tooltip: false,
      },
      elements: {
        point: {
          backgroundColor: colorize.bind(null, false),
  
          borderColor: colorize.bind(null, true),
  
          borderWidth: function(context) {
            return Math.min(Math.max(1, context.datasetIndex + 1), 8);
          },
  
          hoverBackgroundColor: 'transparent',
  
          hoverBorderColor: function(context) {
            return Utils.color(context.datasetIndex);
          },
  
          hoverBorderWidth: function(context) {
            return Math.round(8 * context.raw.v / 1000);
          },
  
          radius: function(context) {
            const size = context.chart.width;
            const base = Math.abs(context.raw.v) / 1000;
            return (size / 24) * base;
          }
        }
      }
    }
});

