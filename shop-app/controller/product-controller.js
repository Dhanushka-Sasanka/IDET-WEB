let productTable = $('#productTable');
let addModal = $('#addModal');
let editModal = $('#editModal');
let searchedProduct;

$('#btnProductAdd').click(function () {

    let productData = $('#productAddForm').serialize();

    $.ajax({
        url: "../api/service/ProductService.php",
        method: "POST",
        data: productData + "&operation=add",
        dataType: 'json',
        success: function (response) {
            response > 0 ? success("Good Job.", "New Product Added Successfully!") : warning("Bad Job", "Product Not Added!");
            getAllProducts();
            addModal.modal('toggle');
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function getAllProducts() {
    productTable.empty();
    $.ajax({
        url: "../api/service/ProductService.php",
        method: "GET",
        dataType: 'json',
        success: function (response) {
            for (let i in response) {
                console.log(response);
                let product = response[i];
                let code = product[0];
                let description = product[1];
                let qtyOnHand = product[2];
                let unitPrice = product[3];

                let row = `<tr>
                    <th scope="row">${code}</th>
                    <td>${description}</td>
                    <td>${qtyOnHand}</td>
                    <td>${unitPrice}</td>
                    <td>
                        <button id="${code}" type="button" class="btn btn-info" onclick="searchProduct(this.id)">
                                <span>
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </span>
                        </button>
                        <button id="${code}" type="button" class="btn btn-danger" onclick="deleteProduct(this.id)">
                                <span>
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </span>
                        </button>
                    </td>
                </tr>`;
                productTable.append(row);
            }

        },
        error: function (error) {
            console.log(error);
        }
    });
}

getAllProducts();


function deleteProduct(productID) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: "../api/service/ProductService.php",
                method: "POST",
                data: "code=" + productID + "&operation=delete",
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if (response > 0) {
                        success("Deleted!", "Product has been deleted.");
                        getAllProducts();
                    } else {
                        warning("Warning!", "Product hasn't been deleted.");
                    }

                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
}


$('#btnProductEdit').click(function () {

    let productData = $('#productEditForm').serialize();
    $.ajax({
        url: "../api/service/ProductService.php",
        method: "POST",
        data: productData + "&operation=edit",
        dataType: 'json',
        success: function (response) {
            response > 0 ? success("Good Job.", "Product Updated Successfully!") : warning("Bad Job", "Product Not Updated!");
            getAllProducts();
            editModal.modal('toggle');
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function searchProduct(productID) {

    $.ajax({
        url: "../api/service/ProductService.php",
        method: "POST",
        data: "code=" + productID + "&operation=search",
        dataType: 'json',
        success: function (response) {
            console.log(response);
            if (response) {
                console.log(response);
                searchedProduct = response;
                $('#editCode').val(response.code);
                $('#editDescription').val(response.description);
                $('#editQtyOnHand').val(response.qty_on_hand);
                $('#editUnitPrice').val(response.unit_price);

                editModal.modal('toggle');
            } else {
                warning("Warning!", "Your file hasn't been deleted.");
            }

        },
        error: function (error) {
            console.log(error);
        }
    });
}
