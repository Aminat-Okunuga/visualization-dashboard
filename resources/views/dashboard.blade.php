<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Visualization | Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div id="myChartContainer">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>

</body>

{{--  --}}

<script>
    async function fetchDataAndCreateChart() {
        try {
            const response = await fetch('/api/data'); // Replace with your API endpoint
            const data = await response.json();

            const labels = data.map(item => item.start_year);
            const intensityValues = data.map(item => item.intensity);

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Intensity',
                        data: intensityValues,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    // Call the function to fetch data and create the chart
    fetchDataAndCreateChart();
</script>


</html>
