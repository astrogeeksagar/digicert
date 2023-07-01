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

    $ona=$_POST['na'];
    $omobb=$_POST['omob'];
    $pwdd=$_POST['opwd'];
    $eml=$_POST['oeml'];
    $cna=$_POST['conp'];
    $cmo=$_POST['cmob'];
    $cml=$_POST['ceml'];
    $oreq=$_POST['req'];
    $ocmt=$_POST['cmnt'];


    #Taking Data From Form
    $sql="insert into orgregistration(Orgname,OfficeMob,Password,Officemail,Contactperson,Contactpersonmob,Contactpersonemail,Requirement,Additionalinfo) 
    values('$ona','$omobb','$pwdd','$eml','$cna','$cmo','$cml','$oreq','$ocmt')";

    #Execuating The Query
   
    if(mysqli_query($con,$sql)) {
        $_SESSION["ofnum"]=$ofnum;

    $message="Dear ". $ona. ", You have been registered successfully for the Digital Certificate generate system website.";
			echo "School Registered successfully";
		echo "<br />";
//		echo $fna;
//		echo $lna;
//		echo $email; 
//		echo $message;
header("Location:https://codebucket.co.in/digitalcertificate/mailsend.php?to=$eml&sub=Registration Successfull&msg=$message");
    // echo "Record Has Been Inserted Successfully";
        }
        else{
            echo "Error In Submitting Record";
        }
        mysqli_close($con);

        
        ?>


       
