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

    $rla= $_POST['rln'];

    $sql= "select * from cert_verification where RollNu='$rla'";

    $r=mysqli_query($con,$sql);
    if($rla=='') {
        echo "Unable To Find Data";
    }

    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'></script>";
    echo "<script src='pdfscript.js'></script>";

    echo "<div id='certificate'>";

    echo "<center>";
    echo "<h1> Selected Student Data </h1>";
    echo "<table border='3'>";
    echo "<tr>";
    echo "<td> StudentName </td>";
    echo "<td> RollNu </td>";
    echo "<td> Course </td>";
    echo "<td> CourseType </td>";
    echo "<td> StartDate </td>";
    echo "<td> EndDate </td>";
    echo "<td> IssueDate </td>";
    echo "<td> Certificateno </td>";
    echo "</tr>";

    while($row=$r->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row['StudentName']."</td>";
        echo "<td>".$row['RollNu']."</td>";
        echo "<td>".$row['Course']."</td>";
        echo "<td>".$row['CourseType']."</td>";
        echo "<td>".$row['StartDate']."</td>";
        echo "<td>".$row['EndDate']."</td>";
        echo "<td>".$row['IssueDate']."</td>";
        echo "<td>".$row['Certificateno']."</td>";
        echo "</tr>";
        echo "</table>";
        echo "</br>";
        echo "<button onclick='generatePDF()'>Download</button>";
        // echo "<input type='button' value='Download'>";
        echo "</center>";
        echo "</div>";

        
    }

    
    


    mysqli_close($con);


?>