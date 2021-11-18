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
//echo "Connected successfully";
      
    $username = $_POST['Uname'];  
    $password = $_POST['Pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from admin where uname = '$username' and upass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
             header("location: adminviewblog.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>