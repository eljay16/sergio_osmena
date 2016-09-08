$(document).ready(function () {
	jQuery.validator.addMethod("validateUsername", function(value, element) { 
		var re = new RegExp(/^[a-zA-Z0-9.\-_$*!]{5,30}$/);
  		return this.optional(element) || re.test(value);
	}, "Please enter valid characters.");
	$("#adminLogin").validate({
		rules:{
			username: {
				required:true,
				minlength:5,
				maxlength:20,
				validateUsername:true
			},
			password: {
				required:true,
			}
		},
		messages:{
			username:{
				required: "Please enter your username.",
				minlength: jQuery.validator.format("At least {0} characters required!")
			},
			password:{
				required: "Please enter your password."
			}
		},
		errorElement : 'div',
    	errorLabelContainer: '.errorLoginContainer',
	});
	$('#birthdate').datetimepicker({
		format: 'DD/MM/YYYY'
	});

});

window.onload = function(){
  $('.sidebar').css('top',$('#mainNavbar').height());
};
