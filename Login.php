<?php
session_start();

$ofnum= $_POST["mob"];
$pwd= $_POST["opwd"];

// echo $ofnum;
// echo $pwd;

$server="localhost";
$database="bieber";
$username="root";
$password="";


$con=mysqli_connect($server,$username,$password,$database);
if(!$con)
    {
        echo "Unable To Connect With The Database Server";
    }

// Connection
$sql= "select RegId from orgregistration where OfficeMob='$ofnum' and Password='$pwd'";
// Execute Query
$result= mysqli_query($con,$sql);
$row= $result->fetch_assoc();
if(!$row){
    header('location:login.html');
} else
{
    $_SESSION["ofnum"]=$ofnum;
    header('location:orghome.php');
}



?>

