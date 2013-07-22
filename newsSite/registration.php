<html>
<head>
    <title>Index</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="check.php" enctype="multipart/form-data">
    <fieldset >
        <legend>Register</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='name' >Your Full Name*: </label>
        <input type='text' name='name' id='name' maxlength="50" />
        <label for='email' >Email Address*:</label>
        <input type='text' name='email' id='email' maxlength="50" />
         
        <label for='username' >Username*:</label>
        <input type='text' name='username' id='username' maxlength="50" />
         
        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" />
        <input type='submit' name='registration' value='Sign up' />     
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
</body>
</html>
    <!--<table width="300" border="0">
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <span style="size:10%; color:#FF0000">
            <?php
                if(isset($_GET["pass"])){
                    echo $_GET["pass"];
                }
            ?>
        </span>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="Sign up" name="registration" />
            </td>
        </tr>
    </table>
</form>
    
    </body>
    </html>-->  