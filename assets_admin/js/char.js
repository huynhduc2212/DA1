const xValues = JSON.parse(document.getElementById("xValues").textContent);
const yValues = JSON.parse(document.getElementById("yValues").textContent);

new Chart("lineChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [
      {
        label: "Thu nhập theo tháng",
        fill: false,
        lineTension: 0,
        backgroundColor: "#2a2185",
        borderColor: "#2a2185",
        data: yValues,
      },
    ],
  },
  options: {
    scales: {
      x: {
        title: {
          display: true,
          text: "Months",
        },
      },
      y: {
        title: {
          display: true,
          text: "Total Sales",
        },
      },
    },
  },
});
