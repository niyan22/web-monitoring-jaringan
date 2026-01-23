const ctx = document.getElementById('trafficChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['15:39', '15:40', '15:41', '15:42'],
        datasets: [
            {
                label: 'Traffic A',
                data: [1200, 1500, 900, 1800],
                borderColor: 'red',
                fill: true
            },
            {
                label: 'Traffic B',
                data: [800, 1200, 700, 1600],
                borderColor: 'green',
                fill: true
            }
        ]
    }
});
