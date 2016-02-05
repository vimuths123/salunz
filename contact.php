
<?php

$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "salunz";
//$username = "silverdr_salunz";
//$password = "salunz12345";
//$hostname = "localhost";
//$dbname = "silverdr_salunz";

$conn = new mysqli($hostname, $username, $password, $dbname);

if (isset($_POST['email'])) {
    
    if ($_POST['time'] == "") {
        echo "You'r time field was empty or notvalid. Refresh again to see the form.";
    } else {
         $result = $conn->query("SELECT * FROM `booking`");
         while ($row = $result->fetch_assoc()) {
             if($row{'booking_time'} == $_POST['time']){
                 echo "Sorry, You'r time has tacken by someone else. Refresh again to see the form.";
                 exit();
             }
         }
         
         $conn->query("INSERT INTO `booking` (`name`,`email`,`booking_time`,`comment`) VALUES ('".$_POST['time']."','".$_POST['time']."','".$_POST['time']."')");
         
    }

	$name =$_POST["name"];
	$from =$_POST["email"];
	$comment=$_POST["comment"];
	$time = $_POST['time'];
    $phone = $_POST['phone'];
	// Email Receiver Address
	$receiver="db.thushara@gmail.com";
	$subject="New appoinment for new look";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='http://silverdreamtours.com/z/images/logo-dark.png' width='135'></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Name:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$name."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Phone:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$phone."</td>
	</tr>
	<tr>
    <tr>
    <td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Time of appoinment:</td>
    <td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$time."</td>
    </tr>
    <tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($comment)."</td>
	</tr>
	</table>
	</body>
	</html>
	";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
  if(mail($receiver,$subject,$message,$headers))  
  {
	   //Success Message
     echo 'Time you entered has successfully sent to confirm. Thanks for visiting';
  }
  else
  {	
  	 //Fail Message
     echo "The message could not been sent!";
  }
}
?>
