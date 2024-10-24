<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <?php require('template/headers.php')?>
</head>

<body>

    <div class="sidebar">

        <div class="d-flex">
            <img src="../dist/assest/DOS_LOGO.png" alt="" style="margin-left: 5px;">
            <h1 class="brand-name">COMPANY</h1>
        </div>

        <ul>
            <li id="dashboard" >
                <a href="dashboard.php">
                    <span>
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                    </span>
                    Dashboard
                </a>
            </li>
            <li id="manage_customer">
                <a href="customer.php">
                    <span>
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </span>

                    Manage Customer
                </a>
            </li>
            <li id="manage_product">
                <a href="product.php">
                    <span>
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    </span>
                    Manage Product
                </a>
            </li>
            <li id="manage_order">
                <a href="order.php">
                    <span>
                        <i class="fa fa-first-order" aria-hidden="true"></i>
                    </span>
                    Manage Order
                </a>
            </li>
            <li id="mange_report">
                <a href="report.php">
                    <span>
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    </span>
                    Manage Report
                </a>
            </li>

            <li class="bottom-item" id="logout">
                <a href="#">
                    <span>
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </span>
                    Log out
                </a>
            </li>
        </ul>
    </div>
    <div class="main-container">

        <nav aria-label="breadcrumb" class="m-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
            </ol>
        </nav>

        <div class="d-flex justify-content-around">

            <div class="card text-bg-primary mb-3" style="">
                <div class="card-header text-uppercase">Total Customers</div>
                <div class="card-body">
                    <div class="card-title fs-1">

                        <span>
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </span>


                        <span class="pull-right">

                            105
                        </span>
                    </div>
                </div>
            </div>

            <div class="card text-bg-success mb-3">
                <div class="card-header text-uppercase">Total Orders</div>
                <div class="card-body">
                    <div class="card-title fs-1 ">

                        <span>
                            <i class="fa fa-first-order" aria-hidden="true"></i>
                        </span>

                        <span class="pull-right">

                            105
                        </span>
                    </div>

                </div>
            </div>

            <div class="card text-bg-danger mb-3">
                <div class="card-header text-uppercase">Total Products</div>
                <div class="card-body">
                    <div class="card-title fs-1">
                        <span>
                            <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        </span>
                        <span class="pull-right">

                            457
                        </span>
                    </div>

                </div>
            </div>
            <div class="card text-bg-warning mb-3">
                <div class="card-header text-uppercase">Profit(LKR)</div>
                <div class="card-body row">

                    <div class="card-title fs-1">
                        <span>
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </span>
                        <span class="pull-right">
                            78,512.45
                        </span>
                    </div>

                </div>
            </div>

        </div>






        <div class="row justify-content-around mt-5">
            <div class="col-md-5 ">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-md-5">
                <div>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>

    </div>
    <div class="footer"></div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- <script  src="utils.js"></script> -->
    <script src="../dist/js/chart-utils.min.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        const ctx_2 = document.getElementById('myChart2');

        // new Chart(ctx, {
        //     type: 'bar',
        //     data: {
        //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        //         datasets: [{
        //             label: '# of Votes',
        //             data: [12, 19, 3, 5, 2, 3],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });

        const Utils = ChartUtils.init();

        const DATA_COUNT = 7;
        const NUMBER_CFG = { count: DATA_COUNT, min: -100, max: 100 };

        const labels = Utils.months({ count: 7 });
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Fully Rounded',
                    data: Utils.numbers(NUMBER_CFG),
                    borderColor: Utils.CHART_COLORS.red,
                    backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
                    borderWidth: 2,
                    borderRadius: Number.MAX_VALUE,
                    borderSkipped: false,
                },
                {
                    label: 'Small Radius',
                    data: Utils.numbers(NUMBER_CFG),
                    borderColor: Utils.CHART_COLORS.blue,
                    backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
                    borderWidth: 2,
                    borderRadius: 5,
                    borderSkipped: false,
                }
            ]
        };

        new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
                ,
                responsive: true
            }
        });

        const DATA_COUNT_2 = 5;
        const NUMBER_CFG_2 = { count: DATA_COUNT, min: 0, max: 100 };

        const data_2 = {
            labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
            datasets: [
                {
                    label: 'Dataset 1',
                    data: Utils.numbers(NUMBER_CFG),
                    backgroundColor: Object.values(Utils.CHART_COLORS),
                }
            ]
        };

        const config_2 = {
            type: 'doughnut',
            data: data_2,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Doughnut Chart'
                    }
                }
            },
        };

        new Chart(ctx_2, config_2);

    </script>



   



</body>

</html>
