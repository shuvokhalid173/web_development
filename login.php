<!--      
In the name ALLAH the Beneficent , the Merciful.
-->

<?php
include "welcome.html";
$host_ = "localhost"; 
$user_ = "root";
$pass_ = ""; 
$db_ = "my_first_database";
$mypassword__ = $myusername__ = $myfname = $mylname = $email = NULL;
$dppp = mysqli_connect($host_, $user_, $pass_, $db_);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $myfname = $_POST['firstname_'];
            $mylname = $_POST['lastname_'];
            $mymail = $_POST['email_'];
            $myusername__ = $_POST['username_'];
            $mypassword__ = $_POST['password_'];
            if (!empty($myfname) && !empty($mylname) && !empty($mymail) && !empty($myusername__) && !empty($mypassword__)) {
                $sqll = "INSERT INTO `user_table` ( `firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$myfname', '$mylname', '$mymail', '$myusername__', '$mypassword__')";
            }
            else {
                echo "fill up the required fields <br>";
            }
            if ($dppp->query($sqll) === TRUE ) {
                echo "New record created successfully";
            } 
        }
?>
