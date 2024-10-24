let customerTable = $('#customerTable');
let addModal = $('#addModal');
let editModal = $('#editModal');
let searchedCustomer;

$('#btnCustomerAdd').click(function () {

    let customerData = $('#customerAddForm').serialize();

    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        data: customerData + "&operation=add",
        dataType: 'json',
        success: function (response) {
            response > 0 ? success("Good Job.", "New Customer Added Successfully!") : warning("Bad Job", "Customer Not Added!");
            getAllCustomers();
            addModal.modal('toggle');
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function getAllCustomers() {
    customerTable.empty();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "GET",
        dataType: 'json',
        success: function (response) {
            for (let i in response) {
                let customer = response[i];
                let customerID = customer[0];
                let customerAddress = customer[1];
                let customerName = customer[2];
                let customerSalary = customer[3];

                let row = `<tr>
                    <th scope="row">${customerID}</th>
                    <td>${customerName}</td>
                    <td>${customerAddress}</td>
                    <td>${customerSalary}</td>
                    <td>
                        <button id="${customerID}" type="button" class="btn btn-info" onclick="searchCustomer(this.id)">
                                <span>
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </span>
                        </button>
                        <button id="${customerID}" type="button" class="btn btn-danger" onclick="deleteCustomer(this.id)">
                                <span>
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </span>
                        </button>
                    </td>
                </tr>`;
                customerTable.append(row);
            }

        },
        error: function (error) {
            console.log(error);
        }
    });
}

getAllCustomers();


function deleteCustomer(customerID) {
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
                url: "../api/service/CustomerService.php",
                method: "POST",
                data: "customerID=" + customerID + "&operation=delete",
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if (response > 0) {
                        success("Deleted!", "Customer has been deleted.");
                        getAllCustomers();
                    } else {
                        warning("Warning!", "Customer hasn't been deleted.");
                    }

                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
}


$('#btnCustomerEdit').click(function () {

    let customerData = $('#customerEditForm').serialize();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        data: customerData + "&operation=edit",
        dataType: 'json',
        success: function (response) {
            response > 0 ? success("Good Job.", "Customer Updated Successfully!") : warning("Bad Job", "Customer Not Updated!");
            getAllCustomers();
            editModal.modal('toggle');
        },
        error: function (error) {
            console.log(error);
        }
    });
});

function searchCustomer(customerID) {

    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        data: "customerID=" + customerID + "&operation=search",
        dataType: 'json',
        success: function (response) {
            console.log(response);
            if (response) {
                searchedCustomer = response;
                $('#editCustomerID').val(response.customer_id);
                $('#editCustomerName').val(response.name);
                $('#editAddress').val(response.address);
                $('#editCustomerSalary').val(response.salary);

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
