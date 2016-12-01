<!--      
In the name ALLAH the Beneficent , the Merciful.
-->

<?php
include "login_page_html_css.html";
$host = "localhost"; 
$user = "root";
$pass = ""; 
$db = "my_first_database";
$dpp = mysqli_connect ($host , $user , $pass , $db);
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($dpp , $_POST['username']);
    $mypassword = mysqli_real_escape_string($dpp , $_POST['password']);
    $sql = "SELECT id FROM user_table WHERE username = '$myusername'  AND password = '$mypassword'";
    $result = mysqli_query($dpp, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "welcome";
        include "welcome.html";
        
    }
    else {
        echo "error";
    }
}
?>
