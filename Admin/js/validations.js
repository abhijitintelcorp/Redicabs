$(document).ready(function() {
    $("#add_owner").validate({
        rules: {
            category: {
                required: true,
            },
            brand: {
                required: true,
            },
            VehicleName: {
                required: true,
            },
            VehicleNumber: {
                required: true,
            },
            VehRCNo: {
                required: true,
            },
            chasis: {
                required: true,
            },
            Dname: {
                required: true,
            },
            DLno: {
                required: true,
            },
            Dno: {
                required: true,
            },
        },
        messages: {
            category: {
                required: "<b style='color:red'>Please enter your category</b>",
            },
            brand: {
                required: "<b style='color:red'>Please enter brand</b>",
            },
            VehicleName: {
                required: "<b style='color:red'>Please enter your Vehicle Name</b>",
            },
            VehicleNumber: {
                required: "<b style='color:red'>Please enter your Vehicle Number</b>",
            },
            VehRCNo: {
                required: "<b style='color:red'>Please enter your Vehicle Rc no.</b>",
            },
            chasis: {
                required: "<b style='color:red'>Please enter your Vehicle chasis no.</b>",
            },
            Dname: {
                required: "<b style='color:red'>Please enter your Driver Name</b>",
            },
            DLno: {
                required: "<b style='color:red'>Please enter your DL No</b>",
            },
            Dno: {
                required: "<b style='color:red'>Please enter your Driver Number</b>",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
});