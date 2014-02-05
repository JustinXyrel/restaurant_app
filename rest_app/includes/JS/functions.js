$(document).ready(function(){
	$("#dob").datepicker();
});

$('#registration').ajaxForm({
	beforeSubmit: function(){
		if($("#first_name").val() == ""){
			$("#error_message").html("First Name is required");
			$("#error_message").show("slow");
		}
	},
	success: function(data){

		}
});