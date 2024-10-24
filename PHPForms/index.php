<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

<div class="container">
    <div class="d-flex justify-content-center align-items-center h-100">


        <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="email"
                       placeholder="Enter email">
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                       name="password">
            </div>

            <button type="submit" class="btn btn-success mt-4">Login</button>
        </form>

    </div>


</div>


</body>

</html>
