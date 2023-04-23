<?php

$user_id = $_POST['user_id'];
$pwd = $_POST['pwd'];

$serverName = "webapp-server-jodu-test.database.windows.net";
$connectionOptions = array(
	"Database" => "webapp",
	"Uid" => "web_admin_jodu",
	"PWD" => "Jvk12345?"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
	echo "<div style='color: red; font-size: 18px;'>Unable to login at this moment, please check your network</div>";
} else {
	$verify_cred = "SELECT user_id FROM user_info WHERE user_id = '$user_id' AND password = '$pwd'";
	$update_view_count= "UPDATE user_info SET attemps = attemps + 1 WHERE user_id = '$user_id'";
	
	$result = sqlsrv_query($conn, $verify_cred);
	$view_query = sqlsrv_query($conn, $update_view_count);
	if ($result === false) {
		echo "<div style='color: red; font-size: 18px;'>Server Down or under maintenance, please try again later</div>";
	} else {
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
		if (!empty($row['user_id'])) {
			sqlsrv_fetch_array($view_query, SQLSRV_FETCH_ASSOC);
			//echo "<div style='color: green; font-size: 18px;'>Congratulations! You have successfully logged in.</div>";
			header("Location: home_page.html"); // Redirect to home_page.html
			echo "<script>
					alert('Congratulations! You have successfully logged in');
					window.location.href = 'home_page.html';
				  </script>";
			
			exit;
		} else {
			echo "<div style='color: red; font-size: 18px;'>Invalid user ID or password</div>";
		}
	}
}
?>
