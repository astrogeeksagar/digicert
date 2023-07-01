<?php

session_start();
$ofnum=$_SESSION["ofnum"];
echo "welcome.$ofnum";

?>

<html>
    <head>

    </head>
    <body>
        <h1>Change Password</h1>
        <form action="pwdproces.php" method="POST">
        <table>
            <tr>
                <tr>
                    <td><p>Enter Old Password:</p></td>
                    <td><input type="password" name="op" placeholder="Enter Old Password"/></td>
                </tr>
                <tr>
                    <td><p>Enter New Password:</p></td>
                    <td><input type="password" name="np" placeholder="Enter New Password"/></td>
                </tr>
                <tr>
                    <td><p>Confirm New Password:</p></td>
                    <td><input type="password" name="c_np" placeholder="Confirm Password"/></td>
                </tr>
            </tr>
        </table>
        <br/>

        <?php
        $_SESSION["ofnum"]=$ofnum;
        ?>

        <input type="submit" value="Save"/>
        <input type="reset" value="Clear"/>
        </form>




    </body>
</html>