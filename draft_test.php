<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="maincontainer">
    <div class="monkeylogin">
        <div class="animcon" id="animcon">
            <img id="hands" src="https://raw.githubusercontent.com/naaficodes/Monkey-Login/master/images/hands.png"/>
        </div>
        <div class="formcon">
        <form action="user_data_insert.php" method="post">
            
            <!-- Add the hidden input field to store the mobile value -->
            <input type="password" id="password" name="pwd1" onclick="closeye();" class="tb" placeholder="Enter New Password" autocomplete="off" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character." required/>
            <br/>
            <br/>
            <input type="password" id="pwdbar" onclick="closeye();" name="pwd2" class="tb" placeholder="Confirm Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character." required/>
            <br/>
            <br/>
            <input type="submit" value="L O G I N">
			<input type="hidden" name="mobile" id="mobile" value="<?php echo $_GET['mobile']; ?>">
        </form>
        </div>
            <footer class="foot"><a style="color: #bababa; text-decoration: none;" href="https://google.com">JODU VENKATA KISHOR</a></footer>
    </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
	<script>
        // Retrieve the values of mobile and otp from URL query parameters
        const urlParams = new URLSearchParams(window.location.search);
        const mobile = urlParams.get('mobile');
        document.getElementById('mobile').value = mobile;
		
    </script>
</body>
</html>
