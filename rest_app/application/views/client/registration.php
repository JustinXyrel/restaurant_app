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
	<div class="form-group" id="div_gender">
		<label for="gender" class="col-sm-2 control-label">Gender</label>
		<div class="btn-group col-sm-5" data-toggle="buttons">
		  <label class="btn btn-primary active">
			<input type="radio" name="gender" id="gender" value="Male" checked="checked"> Male
		  </label>
		  <label class="btn btn-primary">
			<input type="radio" name="gender" id="gender" value="Female"> Female
		  </label>
		</div>
	</div>
	<div class="form-group" id="div_last_name">
		<label for="unit_no" class="col-sm-2 control-label">Unit No.</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="unit_no" placeholder="Unit No." name="unit_no">
		</div>
	</div>
	<div class="form-group" id="div_building_no">
		<label for="building_no" class="col-sm-2 control-label">Building No.</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="building_no" placeholder="Building No." name="building_no">
		</div>
	</div>
	<div class="form-group" id="div_street">
		<label for="div_street" class="col-sm-2 control-label">Street</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="div_street" placeholder="Street" name="div_street">
		</div>
	</div>
	<div class="form-group" id="div_city/town">
		<label for="city/town" class="col-sm-2 control-label">City/Town</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="city/town" placeholder="City/Town" name="city/town">
		</div>
	</div>
	<div class="form-group" id="div_state/provice">
		<label for="city/town" class="col-sm-2 control-label">State/Provice</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="state/provice" placeholder="State/Provice" name="state/provice">
		</div>
	</div>
	<div class="form-group" id="div_country">
		<label for="country" class="col-sm-2 control-label">Country</label>
		<div class="col-sm-5">
			<select name="country" id="country" class="form-control">
				<option value="ph">Philippines</option>
				<option value="sg">Singapore</option>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-5">
			<button type="submit" class="btn btn-default">Sign in</button>
		</div>
	</div>

</form>
