<?php
if (isset($_POST['submit'])){
	include "../php/CheckLogin.php";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Please Login</title>
    <link href="styles/styles.css" rel="stylesheet" />
</head>
<body>
    <div id="DivHeading">Customers and Products</div>
    <br /><br />
    <div id="DivLogin">
        <form method="post" action="login.php" onsubmit="return ValidateLogin();">
            <h2>Please Login</h2>
            <p>Login Name: <input id="TBName" name="uname" type="text" /></p>
            <p>Password: <input id="TBPW" name="pword" type="password" /></p>
            <div id="DivFormError" class="error"></div>
            <input id="BtnloginSubmit" type="submit" name="submit" value="submit" />
            &nbsp;
            <input id="BtnReset" type="reset" value="reset" />
        </form>
    </div>
    <script src="scripts/jquery-2.1.3.min.js"></script>
    <script type="text/javascript">
		var message="<?php echo $userMessage; ?>";
	
        function ValidateLogin() {
            var isValid = true;
            if ($("#TBName").val().length==0){
                $("#TBName").css({ "background-color": "lightpink" });
                isValid = false;
            }
            if ($("#TBPW").val().length == 0) {
                $("#TBPW").css({ "background-color": "lightpink" });
                isValid = false;
            }
            if (!isValid)
                $("#DivFormError").html("Please fill in all of the fields.<br /><br />");
            return isValid;
        }
        $(document).ready(function () {
            $("#BtnReset").click(function () {
                $("#DivFormError").html("");
                $("input[type='text']").css({ "background-color": "white" });
				$("input[type='password']").css({ "background-color": "white" });
                $("#TBName").focus();
            });
            $("#TBName").focus();
			
			if (message.length>0)
				$("#DivFormError").html(message+"<br /><br />");
        });

    </script>
</body>
</html>