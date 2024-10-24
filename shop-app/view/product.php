<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php require('template/headers.php')?>
</head>

<body>

<?php require('template/sidebar-items.php') ?>

    <div class="main-container">

        <nav aria-label="breadcrumb" class="m-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">Manage Products</a></li>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="productAddForm">
                            <div class="form-group">
                                <label for="code">CODE</label>
                                <input type="text" class="form-control" id="code" name="code">
                            </div>

                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="qtyOnHand">QTY ON HAND</label>
                                <input type="text" class="form-control" id="qtyOnHand" name="qtyOnHand">
                            </div>

                            <div class="form-group">
                                <label for="unitPrice">UNIT PRICE</label>
                                <input type="text" class="form-control" id="unitPrice" name="unitPrice">
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnProductAdd">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="productEditForm">
                            <div class="form-group">
                                <label for="editCode">CODE</label>
                                <input type="text" class="form-control" id="editCode" name="code" readonly>
                            </div>

                            <div class="form-group">
                                <label for="editDescription">DESCRIPTION</label>
                                <input type="text" class="form-control" id="editDescription" name="description">
                            </div>
                            <div class="form-group">
                                <label for="editQtyOnHand">QTY ON HAND</label>
                                <input type="text" class="form-control" id="editQtyOnHand" name="qtyOnHand">
                            </div>

                            <div class="form-group">
                                <label for="editUnitPrice">UNIT PRICE</label>
                                <input type="text" class="form-control" id="editUnitPrice" name="unitPrice">
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnProductEdit">Edit changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-4">

            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th scope="col">#CODE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">QTY ON HAND</th>
                    <th scope="col">UNIT PRICE</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="productTable"></tbody>
            </table>
        </div>




    </div>
    <div class="footer"></div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../api/util/notifications.js"></script>
<script src="../controller/product-controller.js"></script>
</body>

</html>
