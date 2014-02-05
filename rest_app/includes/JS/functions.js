$(document).ready(function(){
	$("#dob").datepicker();
});

$('#registration').ajaxForm({
	beforeSubmit: function(){
		if($("#first_name").val() == ""){
			$("#error_message").html("First Name is required");
			$("#div_first_name").addClass("has-error");
			$("#error_message").show("slow");
			return false;
		}
		if($("#middle_name").val() == ""){
			$("#div_first_name").removeClass("has-error");
			$("#error_message").html("Middle Name is required");
			$("#div_middle_name").addClass("has-error");
			$("#error_message").show("slow");
		}
	},
	success: function(data){

	}
});