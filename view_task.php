<!--      
In the name ALLAH the Beneficent , the Merciful.
-->

<?php
    include "username.html";
    $host_name = "localhost"; 
    $user_name = "root"; 
    $pass_word = ""; 
    $db_name = "my_first_database"; 
    $conn = mysqli_connect($host_name, $user_name, $pass_word, $db_name);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $myuser = mysqli_real_escape_string($conn , $_POST['user']);
        $sql_query = "SELECT task_name , task_description FROM task WHERE assign_to = '$myuser' ";
        $ress = mysqli_query($conn, $sql_query);
        $rows = mysqli_num_rows($ress);
    
    if ($rows > 0) {
        $v = 1;
        while ($ans  = mysqli_fetch_assoc($ress)) {
            echo "task no. " . $v;
            echo "<br>";
            echo "task name : " . $ans['task_name'];
            echo "<br>";
            echo "task description : " . $ans['task_description'];
            echo "<br>";
            $v = $v + 1;
        }
    }
    else {
        echo "no task is assigned for " . $myuser;
    }
    }
    
?>
