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

    $sna=$_POST['na'];
    $rla=$_POST['rln'];
    $smob=$_POST['mob'];
    $seml=$_POST['eml'];
    $saddr=$_POST['addr'];
    $sage=$_POST['age'];
    $fnna=$_POST['fna'];
    $scour=$_POST['cour'];
    $scourt=$_POST['court'];
    $sd=$_POST['date1'];
    $ed=$_POST['date2'];
    $idd=$_POST['date3'];
    $scrt=$_POST['cert'];
    


    #Taking Data From Form
    $sql="insert into studentdata(StudentName,RollNu,Mobile,Email,Address,Age,FathersName,Course,CourseType,StartDate,EndDate,IssueDate,Certificateno) 
    values('$sna','$rla','$smob','$seml','$saddr','$sage','$fnna','$scour','$scourt','$sd','$ed','$idd','$scrt')";

    #Execuating The Query
   
    if(mysqli_query($con,$sql))
    {echo "Record Has Been Inserted Successfully";
        }
        else{
            echo "Error In Submitting Record";
        }
        mysqli_close($con);

        
        ?>


       
