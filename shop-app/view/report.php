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
                <li class="breadcrumb-item active"><a href="#">Manage Reports</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
            </ol>
        </nav>

    

    </div>
    <div class="footer"></div>




</body>

</html>
