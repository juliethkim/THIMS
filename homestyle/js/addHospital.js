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
	
	var addHospitalForm = $("#addHospital");
	
	var validator = addHospitalForm.validate({
		
		rules:{
			name :{ required : true },
			hospital_category : { required : true },
			hospital_ownership : { required : true },
			regions : {required : true},
		},
		messages:{
			name :{ required : "This field is required" },
			hospital_category : { required : "This field is required", hospital_category : "Please select valid hospital category address"},
			hospital_ownership : { required : "This field is required", hospital_ownership: "Please select valid hospital ownership" },
			regions : {required : "This field is required"},
		
		}
	});
});
