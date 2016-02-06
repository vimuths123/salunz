<?php

//Databse connection
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "salunz";
$conn = new mysqli($hostname, $username, $password, $dbname);

$times = array(
    '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'
);

$date = $_POST['date'];

//Check the date in database
$result = $conn->query("SELECT `booking_time` FROM `booking` WHERE `booking_date` = '" . $date . "'");


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        foreach ($times as $key => $value) {
            if($row{'booking_time'} == $value) {
                unset($times[$key]);
                $times = array_values($times);
            }
        }
    }
}

echo json_encode($times);




?>
