<?php
   
   $user_id = $_POST['mobile'];
   $password=$_POST['pwd2'];
   $referral_code='ABCD';
   $membership='NON-PREMIUM';
   $location='INDIA';
   $attemps=1;
   $current_timestamp = time();
   $registered_date = date("Y-m-d H:i:s", $current_timestamp);
   $last_login=date("Y-m-d H:i:s", $current_timestamp);
   
   $serverName = "webapp-server-jodu-test.database.windows.net";
   $connectionOptions = array(
		"Database" => "webapp",
		"Uid" => "web_admin_jodu",
		"PWD" => "Jvk12345?"
		);
   $conn = sqlsrv_connect($serverName, $connectionOptions);

   if (!$conn) {
		echo "<div style='color: red; font-size: 18px;'>Connection error, While loggin in, please try again</div>";
		}
		
   else {
		$insert_user_info = "INSERT INTO user_info (user_id ,password ,referral_code ,membership ,location ,attemps ,registered_date ,last_login ) VALUES (?,?,?,?,?,?,?,?)";
		$params = array($user_id, $password, $referral_code,$membership,$location,$attemps,$registered_date,$last_login);
		
		$erase_register_data=" delete from person_data where WHERE mobile=" . $user_id;

		$stmt = sqlsrv_prepare($conn, $insert_user_info, $params);
		$stmt_erase = sqlsrv_query($conn, $erase_register_data);
		if (!$stmt) {
			sqlsrv_execute($stmt_erase);
			die(print_r(sqlsrv_errors(), true));
			
			echo " ServerError ";
		}

		if (sqlsrv_execute($stmt)) {
			echo "<script>
					alert('Registration Completed, please login and Browse');
					window.location.href = 'monkey_login_page.html';
				  </script>";
			exit();
			
			}
		else {
			echo " Technical issues ";
			exit();
		}
   }
   
?>
