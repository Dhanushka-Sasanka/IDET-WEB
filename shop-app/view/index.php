<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../dist/css/main.css">
</head>


<body>

<div class="container">
    <!--<div class="d-flex justify-content-center align-items-center h-100">


        <form action="../model/SalaryCalculate.php" method="post" id="emp_salary_calculate_form">
            <div class="form-group">
                <label for="emp_salary">Salary</label>
                <input type="number" class="form-control text-white" id="emp_salary"
                       name="emp_salary"
                       placeholder="Enter Employee Salary">
            </div>

            <div class="form-group">
                <label for="paymentValue">Payment for one hour</label>
                <input type="number" class="form-control text-white" id="paymentValue"
                       name="paymentValue"
                       placeholder="Enter Payment For One hour.">
            </div>
            <div class="form-group">
                <label for="workingHours">Working hours</label>
                <input type="number" class="form-control text-white" id="workingHours"
                       name="workingHours"
                       placeholder="Enter Working Hours.">
            </div>

            <button type="button" class="btn btn-success mt-4" id="btn-calculate-salary">CALCULATE SALARY</button>
            <p class="m-1" id="net_salary"></p>
        </form>

    </div>-->

    <nav class="navbar navbar-expand-lg bg-primary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../dist/assest/DOS_LOGO.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</body>

</html>
