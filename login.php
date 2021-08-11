<?php

$user = $_POST['username'];
$pass = $_POST['password'];

//$user = 'sakshi';
//$pass = '123456';

//echo "Username : " . $user . "<br>";
//echo "Password : " . $pass . "<br>";

$conn = mysqli_connect("localhost", "root", "", "new");
$result = mysqli_query($conn,"SELECT * FROM login_details WHERE username = '$user' and password = '$pass'");
$count = mysqli_num_rows($result);

if ($count == 1)
{       
	echo "Verified";
	system("/var/www/html/script.sh");
        header("location: analysis.html"); }
else  
      {	echo"Not Verified"; }
?>
