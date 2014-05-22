<style>
body{
	background-color: #E3E4EA;
}

h1 {
	color: #e73f31;
	font-weight: 300;
	margin-left: 0;
	margin-right: 0;
	font-size: 160%;
	text-align: center;
}
	
#btn_login {
	-moz-box-shadow: inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow: inset 0px 1px 0px 0px #f5978e;
	box-shadow: inset 0px 1px 0px 0px #f5978e;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f));
	background: -moz-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background: -webkit-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background: -o-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background: -ms-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background: linear-gradient(to bottom, #f24537 5%, #c62d1f 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f',GradientType=0);
	background-color: #f24537;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	border: 1px solid #d02718;
	display: inline-block;
	cursor: pointer;
	color: #ffffff;
	font-family: arial;
	font-size: 15px;
	font-weight: bold;
	padding: 6px 24px;
	text-decoration: none;
	text-shadow: 0px 1px 0px #810e05;
	width: 100%;
	height: 45px;
}

#btn_login:hover {
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537));
	background: -moz-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background: -webkit-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background: -o-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background: -ms-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background: linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537',GradientType=0);
	background-color: #c62d1f;
}

#btn_register {
	-moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	box-shadow:inset 0px 1px 0px 0px #fce2c1;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
	background:-moz-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-webkit-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-o-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-ms-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25',GradientType=0);
	background-color:#ffc477;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #eeb44f;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #cc9f52;
	width: 100%;
	height: 45px;
}

#btn_register:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
	background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
	background-color:#fb9e25;
}

.col-sm-offset-2 {
padding: 3px;
margin-left: 0%;
}

.form-group {
	margin-bottom: 5px;
}
</style>



<form id="login" name="login" method="post" action="<?php echo base_url();?>client/clientlogin" class="form-horizontal" role="form">

	<h1>LOGIN</h1>
	
	<div class="form-group" id="username">
		<!--<label for="username" class="col-sm-2 control-label">Username</label>-->
		<div class="col-sm-5">
			<input type="text" class="form-control" id="username" placeholder="Username" name="username">
		</div>
	</div>
	<div class="form-group" id="password">
		<!--<label for="password" class="col-sm-2 control-label">Password</label>-->
		<div class="col-sm-5">
			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		</div>
	</div>

	<div class="btn_group">
		<div class="col-sm-offset-2 col-sm-5">
			<button type="submit" id="btn_login">Login</button>
		</div>
	</div>
	<div class="btn_group">
		<div class="col-sm-offset-2 col-sm-5">
			<button type="submit" id="btn_register">Register</button>
		</div>
	</div>

</form>


</form>