<?php

// Azure SQL Server configuration
$serverName = "webapp-server-jodu-test.database.windows.net";
$connectionOptions = array(
    "Database" => "webapp",
    "Uid" => "web_admin_jodu",
    "PWD" => "Jvk12345?"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

// Query and fetch data from the database
$sql = "SELECT * FROM otp_verification";
$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    // Access the data from the row
    echo "ID: " . $row['phone_number'] . "<br>";
    echo "Name: " . $row['otp'] . "<br>";
    echo "Email: " . $row['verified'] . "<br>";
	echo "Email: " . $row['expire_time'] . "<br>";
    // ... retrieve other columns as needed
}

// Close the database connection
sqlsrv_close($conn);

?>
