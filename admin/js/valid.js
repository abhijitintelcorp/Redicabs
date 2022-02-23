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
    $(document).ready(function() {
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
    });

    $(document).ready(function() {
        $("#quick_booking").validate({
            rules: {
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
                date: {
                    required: true,
                },
                Time: {
                    required: true,
                },
            },
            messages: {
                SeatingCapacity: {
                    required: "<b style='color:red'>Please enter yourSeatingCapacity</b>",
                },
                brand: {
                    required: "<b style='color:red'>Please enter your brand</b>",
                },
                VehicleName: {
                    required: "<b style='color:red'>Please enter your Vehicle Name</b>",
                },
                puck_up_location: {
                    required: "<b style='color:red'>Please enter your puck_up_location</b>",
                },
                drop_off_location: {
                    required: "<b style='color:red'>Please enter your drop_off_location</b>",
                },
                date: {
                    required: "<b style='color:red'>Please enter your date</b>",
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
});