$(document).ready(function(){  
	// code to get all records from table via select box
	$("#SeatingCapacity").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'id='+ id;    
		$.ajax({
			url: 'getdata.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
					
					$("#ownername").text(empData.ownername);
				    $("#vehiclename").text(empData.vehiclename);
					
					//$("#records").show();		 
				} else {
					// $("#heading").hide();
					// $("#records").hide();
					// $("#no_records").show();
				}   	
			} 
		});
 	}) 
});