<?php
session_start();
$ofnum=$_SESSION["ofnum"];
?>

<?php

$server="localhost";
$database="bieber";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
{
    echo "Connection Has Been Established Successfully";
}

$sql="select * from studentdata";
$r=mysqli_query($con,$sql);

#Displaying The Data In Webpage
echo "<center>";
echo"<h4> All Student Data </h4>";
echo "<table border='3'>";
echo "<tr>";
echo "<td>Id</td>";
echo "<td>StudentName</td>";
echo "<td>RollNu</td>";
echo "<td>Mobile</td>";
echo "<td>Email</td>";
echo "<td>Address</td>";
echo "<td>Age</td>";
echo "<td>FathersName</td>";
echo "<td>Course</td>";
echo "<td>CourseType</td>";
echo "<td>StartDate</td>";
echo "<td>EndDate</td>";
echo "<td>IssueDate</td>";
echo "<td>Certificateno</td>";
echo "<td>Issue</td>";
echo "</tr>";

while($row=$r->fetch_assoc()){

    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['StudentName']."</td>";
    echo "<td>".$row['RollNu']."</td>";
    echo "<td>".$row['Mobile']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Age']."</td>";
    echo "<td>".$row['FathersName']."</td>";
    echo "<td>".$row['Course']."</td>";
    echo "<td>".$row['CourseType']."</td>";
    echo "<td>".$row['StartDate']."</td>";
    echo "<td>".$row['EndDate']."</td>";
    echo "<td>".$row['IssueDate']."</td>";
    echo "<td>".$row['Certificateno']."</td>";
    $_SESSION["ofnum"]=$ofnum;
    echo "<td><a href=issue.php?id=".$row['Id'].">Issue</a></td>";
    echo "</tr>";
}

    echo "</table>";
    echo "</center>";




mysqli_close($con);


?>
</body>
</html>