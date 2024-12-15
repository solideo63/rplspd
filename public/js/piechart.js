
const getChartOptions = () => {
    return {
      series: [10, 12, 7, 20],
      colors: ["#1C64F2", "#16BDCA", "#9061F9"],
      chart: {
        height: 300,
        width: "100%",
        type: "pie",
      },
      stroke: {
        colors: ["white"],
        lineCap: "",
      },
      plotOptions: {
        pie: {
          labels: {
            show: true,
          },
          size: "100%",
          dataLabels: {
            offset: -25
          }
        },
      },
      labels: ["Tingkat I", "Tingkat II", "Tingkat III", "Tingkat IV"],
      dataLabels: {
        enabled: true,
        style: {
          fontFamily: "Inter, sans-serif",
        },
      },
      grid: {
        show: true,
        padding: {
          left: 2,
          right: 2,
        },
      },
      legend: {
        position: "bottom",
        fontFamily: "Inter, sans-serif",
        position: "bottom",
      },
      yaxis: {
        labels: {
          formatter: function (value) {
            return value 
          },
        },
      },
      xaxis: {
        labels: {
          formatter: function (value) {
            return value 
          },
        },
        axisTicks: {
          show: false,
        },
        axisBorder: {
          show: false,
        },
      },
    }
  }
  
  if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
    chart.render();
  }
  