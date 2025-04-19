<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sweet Delights Sales Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 2rem;
      -webkit-font-smoothing: antialiased;
    }

    h1 {
      text-align: center;
      font-size: 2.8rem;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
      margin-bottom: 2.5rem;
      font-family: "Playfair Display", serif;
    }

    .dashboard {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 3rem;
    }

    .chart-card {
      background-color: rgba(255, 255, 255, 0.12);
      border-radius: 1.5rem;
      padding: 2rem;
      box-shadow: 0 10px 20px rgba(255, 91, 127, 0.64);
      width: 90%;
      max-width: 550px;
      transition: transform 0.3s ease;
    }

    .chart-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 32px  rgba(243, 66, 104, 0.64);
    }

    canvas {
      width: 100% !important;
      height: auto !important;
    }

    @media (max-width: 768px) {
      .chart-card {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  @include('Application.Pages.SideBar')

  <h1>MIS&SB SALES</h1>

  <div class="dashboard">
    <div class="chart-card">
      <canvas id="pieChart"></canvas>
    </div>
    <div class="chart-card">
      <canvas id="barChart"></canvas>
    </div>
    <div class="chart-card">
      <canvas id="lineChart"></canvas>
    </div>
  </div>

  <script>
    const labels = ['Ice Scramble', 'Shakes', 'Drinks', 'Snack Bites'];
    const salesData = [120, 150, 90, 100];

    Chart.defaults.responsive = true;
    Chart.defaults.maintainAspectRatio = false;
    Chart.defaults.devicePixelRatio = 2;

    new Chart(document.getElementById('pieChart'), {
      type: 'pie',
      data: {
        labels,
        datasets: [{
          label: 'Sales',
          data: salesData,
          backgroundColor: ['#ffd6d6', '#ffc6e0', '#ffbad5', '#ffafc8'],
          borderColor: '#F77062',
          borderWidth: 2
        }]
      },
      options: {
        plugins: {
          legend: {
            labels: {
              color: '#F77062',
              font: {
                size: 14
              }
            }
          }
        }
      }
    });

    new Chart(document.getElementById('barChart'), {
      type: 'bar',
      data: {
        labels,
        datasets: [{
          label: 'Total Sales',
          data: salesData,
          backgroundColor: ['#ffc0cb', '#ff9ebc', '#ff7da5', '#ff5d8f'],
          borderRadius: 10
        }]
      },
      options: {
        scales: {
          x: {
            ticks: { color: '#F77062', font: { size: 13 } }
          },
          y: {
            ticks: { color: '#F77062', font: { size: 13 } },
            beginAtZero: true
          }
        },
        plugins: {
          legend: {
            labels: { color: '#F77062', font: { size: 14 } }
          }
        }
      }
    });

    new Chart(document.getElementById('lineChart'), {
      type: 'line',
      data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [
          {
            label: 'Ice Scramble',
            data: [30, 35, 28, 27],
            borderColor: '#ff6f91',
            backgroundColor: '#ff6f91',
            tension: 0.4
          },
          {
            label: 'Shakes',
            data: [40, 45, 33, 32],
            borderColor: '#ff85a2',
            backgroundColor: '#ff85a2',
            tension: 0.4
          },
          {
            label: 'Drinks',
            data: [20, 25, 22, 23],
            borderColor: '#ffa3b3',
            backgroundColor: '#ffa3b3',
            tension: 0.4
          },
          {
            label: 'Snack Bites',
            data: [25, 30, 22, 23],
            borderColor: '#ffc0cb',
            backgroundColor: '#ffc0cb',
            tension: 0.4
          }
        ]
      },
      options: {
        scales: {
          x: {
            ticks: { color: '#F77062', font: { size: 13 } }
          },
          y: {
            ticks: { color: '#F77062', font: { size: 13 } },
            beginAtZero: true
          }
        },
        plugins: {
          legend: {
            labels: { color: '#F77062', font: { size: 14 } }
          }
        }
      }
    });
  </script>
</body>
</html>
