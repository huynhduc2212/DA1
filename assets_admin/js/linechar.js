const xValues = [1,2,3,4,5,6,7,8,9,10,11,12];
const yValues = [7,10,14,15,18,22,20,19,15,20,23,22];

new Chart("lineChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:30}}],
    }
  }
});