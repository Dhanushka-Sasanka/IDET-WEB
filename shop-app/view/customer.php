<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php require('template/headers.php') ?>
</head>

<body>

<?php require('template/sidebar-items.php') ?>

<div class="main-container">

    <nav aria-label="breadcrumb" class="m-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Manage Customer</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
        </ol>
    </nav>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success pull-right " data-bs-toggle="modal"
            data-bs-target="#addModal" style="margin-bottom: 10px; margin-right: 20px">
            <span>
                <i class="fa fa-plus" aria-hidden="true"></i>
            </span>
        NEW
    </button>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="customerAddForm">
                        <div class="form-group">
                            <label for="customerID">ID</label>
                            <input type="text" class="form-control" id="customerID" name="customerID">
                        </div>

                        <div class="form-group">
                            <label for="customerName">Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group">
                            <label for="customerSalary">Salary</label>
                            <input type="text" class="form-control" id="customerSalary" name="customerSalary">
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnCustomerAdd">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="customerEditForm">
                        <div class="form-group">
                            <label for="editCustomerID">ID</label>
                            <input type="text" class="form-control" id="editCustomerID" name="customerID" readonly>
                        </div>

                        <div class="form-group">
                            <label for="editCustomerName">Name</label>
                            <input type="text" class="form-control" id="editCustomerName" name="customerName">
                        </div>
                        <div class="form-group">
                            <label for="editAddress">Address</label>
                            <input type="text" class="form-control" id="editAddress" name="address">
                        </div>

                        <div class="form-group">
                            <label for="editCustomerSalary">Salary</label>
                            <input type="text" class="form-control" id="editCustomerSalary" name="customerSalary">
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnCustomerEdit">Edit changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="m-4">

        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="customerTable"></tbody>
        </table>
    </div>


</div>
<div class="footer"></div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../api/util/notifications.js"></script>
<script src="../controller/customer-controller.js"></script>
</body>

</html>
