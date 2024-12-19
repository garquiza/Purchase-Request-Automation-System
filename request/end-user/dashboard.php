<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="src/css/dashboard.css">
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="content flex-grow-1 animate__animated animate__fadeIn">
            <div class="header-card">
                <h1 class="mb-2">Welcome!</h1>
                <p class="mb-0">Here’s a quick overview of your activities and requests.</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Requests</h5>
                            <p class="card-text text-info"> total requests made.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Approved</h5>
                            <p class="card-text text-success"> requests have been approved.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Rejected</h5>
                            <p class="card-text text-danger">requests were declined.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-4">
                <div class="col-md-6">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Monthly Requests Overview</h5>
                            <div class="chart-container">
                                <canvas id="monthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="calendar-container">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>

    <script>
        const ctx = document.getElementById('monthlyChart').getContext('2d');
        const monthlyChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ,
                datasets: [{
                    label: 'Requests',
                    data: ,
                    borderColor: 'rgba(0, 123, 255, 1)',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Requests: ' + tooltipItem.raw;
                            }
                        }
                    }
                },
            },
        });

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: ,
                eventClick: function(info) {
                    alert('Event: ' + info.event.title + '\n' + 'Description: ' + info.event.extendedProps.description);
                }
            });
            calendar.render();
        });
    </script>
</body>

</html>