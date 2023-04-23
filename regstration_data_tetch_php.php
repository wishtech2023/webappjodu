<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form Results</title>
  </head>
  <body>
    <h1>Contact Form Results</h1>
    <?php
	ob_start();
       $user_name = strtoupper($_POST['Name']);
	   $email = strtoupper($_POST['EmailID']);
	   $mobile = $_POST['MobileNumber'];
	   $gender = strtoupper($_POST['Gender']);
	   $bloodGroup = $_POST['BloodGroupName'];
	   $dob = $_POST['birthday'];
	   $country = $_POST['CountryName'];
	   $state = strtoupper($_POST['stateName']);
	   $district = strtoupper($_POST['DistrictName']);
	   $taluk = strtoupper($_POST['TalukName']);
	   $MandalName = strtoupper($_POST['MandalName']);
	   $villageName = strtoupper($_POST['villageName']);
	   $Address = strtoupper($_POST['Address']);
	   $Hobbies = $_POST['Hobbies'];
	   $EducationData = strtoupper($_POST['EducationData']);
	   $Goal = $_POST['GoalName'];
	   $Marriage_status = strtoupper($_POST['Married']);
	   date_default_timezone_set('Asia/Kolkata');
	   
	    $min = 17301; // minimum 5-digit value
		$max = 99999; // maximum 5-digit value

		$otp = mt_rand($min, $max); 
		
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

		$insert_data_otp_data = "INSERT INTO otp_verification (phone_number,otp,verified,otp_sent_ts,expire_ts) VALUES (?,?,?,?,?)";
		
		$current_timestamp = time();
		$otp_sent_time = date("Y-m-d H:i:s", $current_timestamp);
		$registration_date = $otp_sent_time;
		
		$insert_base_data = " INSERT INTO person_data (user_name,mobile,email,gender,bloodGroup,dob,country,state,district,
							taluk,MandalName,villageName,Address,pincode,Hobbies,EducationData,
							Goal,Marriage_status,registration_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ; ";

		$new_timestamp = strtotime('+1 minute', $current_timestamp);
		$expire_ts = date("Y-m-d H:i:s", $new_timestamp);

		$otp_params = array($mobile, $otp, 'Not Verified',$otp_sent_time,$expire_ts);
		$base_data_params = array($user_name,$mobile,$email,$gender,$bloodGroup,$dob,$country,$state,$district,
								  $taluk,$MandalName,$villageName,$Address,$pincode,$Hobbies,
								  $EducationData,$Goal,$Marriage_status,$registration_date);

		$stmt_otp = sqlsrv_prepare($conn, $insert_data_otp_data, $otp_params);
		$stmt_base_data = sqlsrv_prepare($conn, $insert_base_data, $base_data_params);
		if (!$stmt_otp) {
			die(print_r(sqlsrv_errors(), true));
		}
		
		sqlsrv_execute($stmt_base_data);
		if (sqlsrv_execute($stmt_otp)) {
			
			//header("Location: otp_submission_form.html?mobile=" . urlencode($mobile) . "&otp=" . urlencode($otp));
			echo "<script>
					alert('OTP Sent successfully, Please enter below and verify to continue.');
					window.location.href = 'otp_submission_form.html?mobile=" . urlencode($mobile) . "&otp=" . urlencode($otp) . "';
				  </script>";
			echo " Registration Done";
				  

		}
		else {
			echo "<script>alert('Error Please try Again');</script>";
			exit();
		}
		echo "Completed Fine";
   ob_end_flush();
      
    ?>
  </body>
</html>


