<html>
<head>
	<title>Index</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="gen_validatorv4.js" type="text/javascript"></script>
</head>

<form id='register' action='register.php' method='post'
    accept-charset='UTF-8'>
	<fieldset >
		<legend>Register</legend>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='name' >Your Full Name*: </label>
		<input type='text' name='name' id='name' maxlength="50" />
		<label for='email' >Email Address*:</label>
		<input type='text' name='email' id='email' maxlength="50" />
		 
		<label for='username' >UserName*:</label>
		<input type='text' name='username' id='username' maxlength="50" />
		 
		<label for='password' >Password*:</label>
		<input type='password' name='password' id='password' maxlength="50" />
		<input type='submit' name='Submit' value='Submit' />
	 
	</fieldset>
</form>
<script type="text/javascript">
	var frmvalidator  = new Validator("register");
	frmvalidator.EnableOnPageErrorDisplay();
	frmvalidator.EnableMsgsTogether();
	frmvalidator.addValidation("name","req","Please provide your name");
	 
	frmvalidator.addValidation("email","req","Please provide your email address");
	 
	frmvalidator.addValidation("email","email","Please provide a valid email address");
	 
	frmvalidator.addValidation("username","req","Please provide a username");
	 
	frmvalidator.addValidation("password","req","Please provide a password");
</script>