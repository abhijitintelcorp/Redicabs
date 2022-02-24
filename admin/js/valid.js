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
            seat: {
                required: true,
            },
            price: {
                required: true,
            },
            year: {
                required: true,
            },
            ownname: {
                required: true,
                minlength: 3,
            },
            ownadhar: {
                required: true,
            },
            ownno: {
                required: true,
            },
            email: {
                required: true,
                email: true,
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
            seat: {
                required: "<b style='color:red'>Please enter your Sitting Capacity </b>",
            },
            price: {
                required: "<b style='color:red'>Please enter your price</b>",
            },
            year: {
                required: "<b style='color:red'>Please enter your Model Year</b>",
            },
            ownname: {
                required: "<b style='color:red'>Please enter Owner Name</b>",
                minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
            },
            ownadhar: {
                required: "<b style='color:red'>Please enter Your Adhar Number</b>",
            },
            ownno: {
                required: "<b style='color:red'>Please enter Owner Number</b>",
            },
            email: {
                required: "<b style='color:red'>Please enter Email Id</b>",
                email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>",
            },
            Adharimage1: {
                required: "<b style='color:red'>Please Upload Your Adhar Image </b>",
            },
            DLimage: {
                required: "<b style='color:red'>Please Upload Driver DL Image </b>",
            },
            Adharimage: {
                required: "<b style='color:red'>Please Upload Driver's Adhar Image </b>",
            },
            frontimage: {
                required: "<b style='color:red'>Please Upload Car Front Image </b>",
            },
            backimage: {
                required: "<b style='color:red'>Please Upload Car Back Image </b>",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
    $("#add_owner_update").validate({
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
            seat: {
                required: true,
            },
            price: {
                required: true,
            },
            year: {
                required: true,
            },
            ownname: {
                required: true,
                minlength: 3,
            },
            ownadhar: {
                required: true,
            },
            ownno: {
                required: true,
            },
            email: {
                required: true,
                email: true,
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
            seat: {
                required: "<b style='color:red'>Please enter your Sitting Capacity </b>",
            },
            price: {
                required: "<b style='color:red'>Please enter your price</b>",
            },
            year: {
                required: "<b style='color:red'>Please enter your Model Year</b>",
            },
            ownname: {
                required: "<b style='color:red'>Please enter Owner Name</b>",
                minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
            },
            ownadhar: {
                required: "<b style='color:red'>Please enter Your Adhar Number</b>",
            },
            ownno: {
                required: "<b style='color:red'>Please enter Owner Number</b>",
            },
            email: {
                required: "<b style='color:red'>Please enter Email Id</b>",
                email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>",
            },
            Adharimage1: {
                required: "<b style='color:red'>Please Upload Your Adhar Image </b>",
            },
            DLimage: {
                required: "<b style='color:red'>Please Upload Driver DL Image </b>",
            },
            Adharimage: {
                required: "<b style='color:red'>Please Upload Driver's Adhar Image </b>",
            },
            frontimage: {
                required: "<b style='color:red'>Please Upload Car Front Image </b>",
            },
            backimage: {
                required: "<b style='color:red'>Please Upload Car Back Image </b>",
            },
        },
    });

    $("#quick_booking").validate({
        rules: {
            UserName: {
                required: true,
                minlength: 3,
            },
            EmailId: {
                required: true,
                email: true,
            },
            ContactNo: {
                required: true,
                minlength: 10,
            },
            SeatingCapacity: {
                required: true,
            },
            brand: {
                required: true,
            },
            VehicleName: {
                required: true,
            },
            puck_up_location: {
                required: true,
            },
            drop_off_location: {
                required: true,
            },
            fromdate: {
                required: true,
            },
            todate: {
                required: true,
            },
            Time: {
                required: true,
            },
        },
        messages: {
            UserName: {
                required: "<b style='color:red'>Please enter your User Name</b>",
                minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
            },
            EmailId: {
                required: "<b style='color:red'>Please enter Email Id</b>",
                email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>",
            },
            ContactNo: {
                required: "<b style='color:red'>Please enter your Mobile Number</b>",
                ContactNo: "<b style='color:red'>Please Enter numerical values Only</b>",
            },
            SeatingCapacity: {
                required: "<b style='color:red'>Please enter your Seating Capacity</b>",
            },
            brand: {
                required: "<b style='color:red'>Please enter your brand</b>",
            },
            VehicleName: {
                required: "<b style='color:red'>Please enter your Vehicle Name</b>",
            },
            puck_up_location: {
                required: "<b style='color:red'>Please enter your pick_up_location</b>",
            },
            drop_off_location: {
                required: "<b style='color:red'>Please enter your drop_off_location</b>",
            },
            fromdate: {
                required: "<b style='color:red'>Please enter your From Date</b>",
            },
            todate: {
                required: "<b style='color:red'>Please enter your To Date</b>",
            },
            Time: {
                required: "<b style='color:red'>Please enter your Time</b>",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
});