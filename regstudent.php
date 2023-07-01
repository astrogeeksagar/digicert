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

$sql = "select max(Certificateno) as m from studentdata";
$r = mysqli_query($con,$sql);

$row=$r->fetch_assoc();
$certnu = $row['m'];
echo $certnu;
if($certnu==0) {
    $cern=1000; }
    else {
        $cern=$certnu+1;
    }

    $sql = "select max(RollNu) as D from studentdata";
$load = mysqli_query($con,$sql);

$row=$load->fetch_assoc();
$rolnu = $row['D'];
echo $rolnu;
if($rolnu==0) {
    $cern=2000; }
    else {
        $rolln=$rolnu+1;
    }


?>


<html>
    <head>
        <link rel="stylesheet" href="sagarstyle.css"/>
</head>
<body>
<h1> Register Student </h1>
    <br />
    <div class="box2">
        <span>
            <center>
                <h3>Fill Your Student Details Below</h3>
                <form action="regstudentsprocess.php" method="post">
                    <table>
                        <tr>
                        <tr>
                            <td>
                                <p>Student Name:</p>
                            </td>
                            <td> <input type="text" name="na" placeholder="Rohan" required /> </td>
                        </tr>
                        <tr>
                    <td><p>Roll No.</p></td>
                   <td><input type="text" name="rln" value="<?php echo $rolln; ?>" readonly /></td>
                </tr>
                        <tr>
                            <td>
                                <p>Mobile:</p>
                            </td>
                            <td> <input type="number" min="10" name="mob" placeholder="1234567890" required /> </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email:</p>
                            </td>
                            <td> <input type="text" name="eml" placeholder="rohan@gmail.com" /> </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Address:</p>
                            </td>
                            <td> <input type="text" name="addr" placeholder="Kanpur, Uttar Pradesh" /> </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Age:</p>
                            </td>
                            <td> <input type="number" name="age" placeholder="17" required /> </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Father's Name:</p>
                            </td>
                            <td> <input type="text" name="fna" placeholder="Mr. Rakesh Mishra" /> </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Course:</p>
                            </td>
                            <td> <select name="cour" id="cour">
                                    <option value="Select">Select</option>
                                    <option value="Science">Science</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="B.A.">(B.A.)Bachelor Of Arts</option>
                                    <option value="M.A.">(M.A.)Master Of Arts</option>
                                    <option value="B.C.A.">(B.C.A.)Bachelor Of Computer</option>
                                    <option value="M.C.A.">(M.C.A.)Master Of Computer</option>
                                    <option value="Polytechnic.">Polytechnic</option>
                        </tr>
                        <tr>
                            <td>
                                <p>Course Type:</p>
                            </td>
                            <td> <select name="court" id="court">
                                    <option value="Select">Select</option>
                                    <option value="Science">Science</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="B.A.">(B.A.)Bachelor Of Arts</option>
                                    <option value="M.A.">(M.A.)Master Of Arts</option>
                                    <option value="B.C.A.">(B.C.A.)Bachelor Of Computer</option>
                                    <option value="M.C.A.">(M.C.A.)Master Of Computer</option>
                                    <option value="Polytechnic.">Polytechnic</option>
                        </tr>
                        <tr>
                        <td>
                        <p>Start Date:</p>
                    </td>
                    <td> <input type="date" name="date1" placeholder="Start Date" /> </td>
                </tr>
                <tr>
                    <td><p>End Date</p></td>
                    <td><input type="date" name="date2" placeholder="End Date" /></td>
                </tr>
                <tr>
                    <td><p>Issue Date</p></td>
                    <td><input type="date" name="date3" placeholder="Issue Date" /></td>
                </tr>
                <tr>
                    <td><p>Certificate No.</p></td>
                   <td><input type="text" name="cert" value="<?php echo $cern; ?>" readonly/></td>
                </tr>
                        </tr>
                    </table>
                    <br />
                    <?php
                  $_SESSION["ofnum"]=$ofnum;
                  ?>
                    <td>
                        <input type="submit" value="Submit" />
                        <input type="reset" value=" Clear" />
                    </td>
            </center>
        </span>
    </div>
</body>
    </html>