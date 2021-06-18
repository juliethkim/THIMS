/**
 * File : editUser.js 
 * 
 * This file contain the validation of edit user form
 * 
 * @author Kishor Mali
 */
$(document).ready(function(){
	
	var editUserForm = $("#editHospital");
	
	var validator = editHospitalForm.validate({
		
		rules:{
			name :{ required : true },
			category : { required : true},
			ownership : {required: true},
			region : { required : true},
			district: { required : true}
		},
		messages:{
			name :{ required : "This field is required" },
			category : { required : "This field is required" },
			ownership : {required: "This field is required" },
			region: { required : "This field is required" },
			district : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});

	var editProfileForm = $("#editProfile");
	
	var validator = editProfileForm.validate({
		
		rules:{
			name :{ required : true },
			category : { required : true },
			ownership : { required : true },
		},
		messages:{
			name :{ required : "This field is required" },
			category : { required : "This field is required",  },
			ownership : { required : "This field is required" },
		}
	});

});