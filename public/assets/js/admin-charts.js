// Grafik Dashboard Admin

document.addEventListener('DOMContentLoaded', function() {
    // Grafik Aktivitas Pengguna - Grafik Garis
    const userActivityCtx = document.getElementById('userActivityChart').getContext('2d');
    const userActivityChart = new Chart(userActivityCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Pengguna Aktif',
                    data: [650, 750, 820, 790, 830, 890, 920, 970, 1020, 1100, 1170, 1245],
                    backgroundColor: 'rgba(78, 115, 223, 0.05)',
                    borderColor: 'rgba(78, 115, 223, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(78, 115, 223, 1)',
                    pointBorderColor: '#fff',
                    pointRadius: 3,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: 'rgba(78, 115, 223, 1)',
                    pointHoverBorderColor: 'rgba(78, 115, 223, 1)',
                    pointHitRadius: 10,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Pendaftaran Baru',
                    data: [35, 42, 50, 38, 45, 53, 48, 60, 55, 70, 65, 75],
                    backgroundColor: 'rgba(28, 200, 138, 0.05)',
                    borderColor: 'rgba(28, 200, 138, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(28, 200, 138, 1)',
                    pointBorderColor: '#fff',
                    pointRadius: 3,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: 'rgba(28, 200, 138, 1)',
                    pointHoverBorderColor: 'rgba(28, 200, 138, 1)',
                    pointHitRadius: 10,
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Grafik Sumber Lalu Lintas - Grafik Donat
    const trafficSourcesCtx = document.getElementById('trafficSourcesChart').getContext('2d');
    const trafficSourcesChart = new Chart(trafficSourcesCtx, {
        type: 'doughnut',
        data: {
            labels: ['Direct', 'Social Media', 'Organic Search', 'Referral', 'Other'],
            datasets: [{
                data: [35, 25, 20, 15, 5],
                backgroundColor: [
                    'rgba(78, 115, 223, 0.8)',
                    'rgba(28, 200, 138, 0.8)',
                    'rgba(246, 194, 62, 0.8)',
                    'rgba(54, 185, 204, 0.8)',
                    'rgba(231, 74, 59, 0.8)'
                ],
                borderColor: '#ffffff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right'
                }
            },
            cutout: '70%'
        }
    });

    // Grafik Sumber Daya Sistem - Grafik Batang
    const systemResourcesCtx = document.getElementById('systemResourcesChart').getContext('2d');
    const systemResourcesChart = new Chart(systemResourcesCtx, {
        type: 'bar',
        data: {
            labels: ['CPU', 'Memory', 'Disk I/O', 'Network', 'Database', 'Cache'],
            datasets: [{
                label: 'Current Usage (%)',
                data: [45, 78, 62, 33, 50, 40],
                backgroundColor: [
                    'rgba(78, 115, 223, 0.8)',
                    'rgba(246, 194, 62, 0.8)',
                    'rgba(28, 200, 138, 0.8)',
                    'rgba(54, 185, 204, 0.8)',
                    'rgba(231, 74, 59, 0.8)',
                    'rgba(133, 135, 150, 0.8)'
                ],
                borderColor: [
                    'rgba(78, 115, 223, 1)',
                    'rgba(246, 194, 62, 1)',
                    'rgba(28, 200, 138, 1)',
                    'rgba(54, 185, 204, 1)',
                    'rgba(231, 74, 59, 1)',
                    'rgba(133, 135, 150, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        callback: function(value) {
                            return value + '%';
                        }
                    },
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
