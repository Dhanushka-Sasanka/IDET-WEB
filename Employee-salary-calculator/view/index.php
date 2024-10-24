<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../dist/main.css">
</head>


<body>

<div class="container">
    <div class="d-flex justify-content-center align-items-center h-100">


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

    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="../controller/SalaryCalculatorController.js"></script>
</body>

</html>
