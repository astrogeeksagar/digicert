<?php
session_start();
$ofnum=$_SESSION["ofnum"];

$server="localhost";
$database="bieber";
$username="root";
$password="";
$rolln= $_GET['id'];
$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
    {
        echo "Unable To Connect With The Database Server";
	}

	$sql= "SELECT * from studentdata where Id='$rolln'";
$r = mysqli_query($con,$sql);

$row=$r->fetch_assoc();
//fe//fetch account 
row['StudentName'];
	echo $row['RollNu'];
	echo $row['Course'];
	echo $row['CourseType'];
	echo $row['StartDate'];
	echo $row['EndDate'];
	echo $row['IssueDate'];
	echo $row['Certificateno'];

	$sn= $row['StudentName'];
	$rln= $row['RollNu'];
	$crt= $row['Course'];
	$scrt= $row['CourseType'];
	$std= $row['StartDate'];
	$etd= $row['EndDate'];
	$idd= $row['IssueDate'];
	$crr= $row['Certificateno'];


	
$sqlto= "insert into cert_verification(StudentName,RollNu,Course,CourseType,StartDate,EndDate,IssueDate,Certificateno) values('$sn','$rln','$crt','$scrt','$std','$etd',
'$idd','$crr')";

if(mysqli_query($con,$sqlto))
    {echo "Record Has Been Inserted Successfully";
        }
        else{
            echo "Error In Submitting Record";
        }

 


mysqli_close($con);


?>
