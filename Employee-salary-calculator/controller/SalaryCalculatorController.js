$(document).ready(function () {
    $('#btn-calculate-salary').click(() => {

        let formData = $('#emp_salary_calculate_form').serialize();

        $.ajax({
            method: 'post',
            url: "../model/SalaryCalculate.php",
            dataType: 'json',
            data: formData,
            success:function (response) {
                alert(response)
                $('#net_salary').text(`Net Salary is : ${response}`);
            }
        })
    })
});


