<h2>Personal Information</h2>
<hr>

<div class="alert alert-danger" id="error_message" style="display:none;"></div>
<form id="registration" name="registration" method="post" action="<?php echo base_url();?>client/clientRegistration" class="form-horizontal" role="form">
	<div class="form-group" id="div_first_name">
		<label for="first_name" class="col-sm-2 control-label">First Name</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
		</div>
	</div>
	<div class="form-group" id="div_middle_name">
		<label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name">
		</div>
	</div>
	<div class="form-group" id="div_last_name">
		<label for="last_name" class="col-sm-2 control-label">Last Name</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
		</div>
	</div>
	<div class="form-group" id="div_last_name">
		 <label for="year" class="control-label input-group">Year</label>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-default">
            <input type="radio" name="year" value="2011">2011
        </label>
        <label class="btn btn-default">
            <input type="radio" name="year" value="2012">2012
        </label>
        <label class="btn btn-default active">
            <input type="radio" name="year" value="2013" checked="">2013
        </label>
    </div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-5">
			<button type="submit" class="btn btn-default">Sign in</button>
		</div>
	</div>

</form>
