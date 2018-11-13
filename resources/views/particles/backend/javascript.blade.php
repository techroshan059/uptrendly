<!-- Import jquery -->
<script src="{{url('backend/node_modules/js/jquery.min.js')}}"></script>
<!-- Import materialize js -->
<script src="{{url('backend/node_modules/js/materialize.min.js')}}"></script>
<!-- Import prismjs (syntex highlighter) -->
<script src="{{url('backend/node_modules/js/prism.js')}}"></script>
<!-- Import chartjs (chart library) -->
<script src="{{url('backend/node_modules/js/Chart.min.js')}}"></script>
<!-- Import Efnify app js -->
<script src="{{url('backend/js/app.js')}}"></script>
<!-- Import Efnify search js (Placed in navbar) -->
<script src="{{url('backend/js/search.js')}}"></script>
<script>
    // Analytics report
    var ctx = document.getElementById('dashboard-analytics-report-chart').getContext('2d');

    var dashboardAnalyticsReportChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Visitors online",
                borderColor: '#4db6ac',
                pointBackgroundColor: '#4db6ac',
                pointRadius: 0,
                backgroundColor: '#4db6ac',
                legendColor: '#4db6ac',
                fill: true,
                borderWidth: 2,
                data: [154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374]
            }, {
                label: "Total Sales",
                borderColor: '#64b5f6',
                pointBackgroundColor: '#64b5f6',
                pointRadius: 0,
                backgroundColor: '#64b5f6',
                legendColor: '#64b5f6',
                fill: true,
                borderWidth: 2,
                data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521]
            }, {
                label: "Total Projects",
                borderColor: '#4dd0e1',
                pointBackgroundColor: '#4dd0e1',
                pointRadius: 0,
                backgroundColor: '#4dd0e1',
                legendColor: '#4dd0e1',
                fill: true,
                borderWidth: 2,
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
            }, {
                label: "Today Income",
                borderColor: '#ba68c8',
                pointBackgroundColor: '#ba68c8',
                pointRadius: 0,
                backgroundColor: '#ba68c8',
                legendColor: '#ba68c8',
                fill: true,
                borderWidth: 2,
                data: [592, 680, 739, 558, 638, 499, 380, 734, 568, 610, 780, 910]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: true
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 5,
                    right: 5,
                    top: 15,
                    bottom: 15
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 5,
                        padding: 10
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 10,
                        fontStyle: "500"
                    }
                }]
            }
        }
    });
</script>
