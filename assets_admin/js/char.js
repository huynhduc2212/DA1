const xValues = JSON.parse(document.getElementById('xValues').textContent);
const yValues = JSON.parse(document.getElementById('yValues').textContent);

new Chart("lineChart", {
    type: "bar",
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
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 0, max: Math.max(...yValues) + 10 } }]
        }
    }
});