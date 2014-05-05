$(document).ready(function(){
	$("#dob").datepicker();
});

$('#registration').ajaxForm({
	beforeSubmit: function(){
		if($("#first_name").val() == ""){
			$("#error_message").html("First Name is required");
			$("#div_first_name").addClass("has-error");
			$("#error_message").show("slow");
			$("#error_message")[0].scrollIntoView();
			return false;
		}
		if($("#middle_name").val() == ""){
			$("#div_first_name").removeClass("has-error");
			$("#error_message").html("Middle Name is required");
			$("#div_middle_name").addClass("has-error");
			$("#error_message").show("slow");
			return false;
		}
		if($("#last_name").val() == ""){
			$("#div_middle_name").removeClass("has-error");
			$("#error_message").html("Last Name is required");
			$("#div_last_name").addClass("has-error");
			$("#error_message").show("slow");
			return false;
		}
	},
	success: function(data){
		alert(data);
	}
});