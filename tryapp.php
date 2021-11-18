<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "try";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//inserting

 
$fname = $_POST['fname']; 
$mobile = $_POST['mobile']; 
$email = $_POST['email'];
$adate = $_POST['adate'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];
$code = $_POST['code'];

$sql = "INSERT INTO appointment (fname , mobile , email , adate , area , city , state , code) VALUES ('$fname' , '$mobile', '$email' , '$adate' , '$area' , '$city' , '$state' , '$code')"; 

if(!mysqli_query($conn,$sql))  
{  
    echo 'Not inserted';  
}  
else  
{  
    echo 'Data Inserted';  
} 
?>