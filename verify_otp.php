<?php

$mobile = $_POST['mobile'];
$otp = $_POST['otp'];
$user_otp = $_POST['otpCode'];

if ($otp == $user_otp) {
    $serverName = "webapp-server-jodu-test.database.windows.net";
    $connectionOptions = array(
        "Database" => "webapp",
        "Uid" => "web_admin_jodu",
        "PWD" => "Jvk12345?"
    );
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if (!$conn) {
        echo "<div style='color: red; font-size: 18px;'>Connection error, please check your network</div>";
         } 
	else {
        $verify_col_update = "UPDATE otp_verification SET verified = 'YES' WHERE phone_number=" . $mobile;
        $stmt = sqlsrv_query($conn, $verify_col_update);
        if ($stmt === false) {
            echo "<div style='color: red; font-size: 18px;'>Server Down or under maintenance, please try again later</div>";
            } 
		else {
            echo "<div style='color: green; font-size: 18px;'>Verified your mobile successfully</div>";
            header("Location: password_setup_form.html?mobile=" . urlencode($mobile));
            exit;
             }
          }
    }
elseif ($otp != $user_otp) {
    echo "<div style='color: red; font-size: 18px;'>Invalid OTP, Please enter valid OTP</div>";
}
else {
    echo "<div style='color: red; font-size: 18px;'>Technical Issues, please try again later</div>";
}
?>
