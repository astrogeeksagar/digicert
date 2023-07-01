<?php

session_start();
$ofnum=$_SESSION["ofnum"];

$server="localhost";
$database="bieber";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
    {
        echo "Unable To Connect With The Database Server";
    }

$oldp = $_POST["op"];
$newp = $_POST["np"];
$conp = $_POST["c_np"];


$sql = "select Password from orgregistration where OfficeMob='$ofnum'";
$r = mysqli_query($con,$sql);

$row=$r->fetch_assoc();
$dbpwd = $row['Password'];

if($dbpwd == $oldp) {
  
    if($newp == $conp) {
      
        $sql = "update orgregistration set Password='$newp' where OfficeMob='$ofnum'";

    if(mysqli_query($con,$sql))
{echo "Password Has Been Updated Successfully";
    
}
else{
    echo "Error In Updating Password";
    
}
}
}
mysqli_close($con);

?>