/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addUserForm = $("#addHospital");
	
	var validator = addHospitalForm.validate({
		
		rules:{
			name :{ required : true },
			category : { required : true},
			ownership : { required : true },
			region : {required : true},
			district : { required : true },
		},
		messages:{
			name :{ required : "This field is required" },
			category : { required : "This field is required"},
			ownership  : { required : "This field is required" },
			region  : {required : "This field is required" },
			district : { required : "This field is required"},			
		}
	});
});
