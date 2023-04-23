<?php

// $mobile = $_POST['MobileNumber'];
// $min = 17301; // minimum 5-digit value
// $max = 99999; // maximum 5-digit value

// $otp = mt_rand($min, $max); 
/*
$url_1 = "https://2factor.in/API/V1/55b005ee-e01f-11ed-addf-0200cd936042/SMS/";
$url_2=$mobile."/".$otp."/OTP+VERIFICATION";
$url_3=$url_1.$url_2;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
curl_close($ch);

if ($contents !== false) {
    echo 'OTP Sent Successfully!!!';
} 
else {
        echo 'Failed to sent OTP ';
}

$serverName = "webapp-server-jodu-test.database.windows.net";
$connectionOptions = array(
    "Database" => "webapp",
    "Uid" => "web_admin_jodu",
    "PWD" => "Jvk12345?"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

$insert_data = "INSERT INTO otp_verification (phone_number,otp,verified,otp_sent_ts,expire_ts) VALUES (?,?,?,?,?)";

$current_timestamp = time();
$otp_sent_time = date("Y-m-d H:i:s", $current_timestamp);

$new_timestamp = strtotime('+1 minute', $current_timestamp);
$expire_ts = date("Y-m-d H:i:s", $new_timestamp);

$params = array($mobile, $otp, 'Not Verified',$otp_sent_time,$expire_ts);

$stmt = sqlsrv_prepare($conn, $insert_data, $params);
if (!$stmt) {
    die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_execute($stmt)) {
	
	//header("Location: otp_submission_form.html?mobile=" . urlencode($mobile) . "&otp=" . urlencode($otp));
    echo "<script>
			alert('OTP Sent successfully, Please enter below and verify to continue.');
			window.location.href = 'otp_submission_form.html?mobile=" . urlencode($mobile) . "&otp=" . urlencode($otp) . "';
		  </script>";
	exit;
		  

}
else {
    echo "<script>alert('Error Please try Again');</script>";
    exit();
}
echo "Completed Fine";

*/
?>
