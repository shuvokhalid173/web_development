<!--      
In the name ALLAH the Beneficent , the Merciful.
-->

<?php
include "task_table.html";
$servername = "localhost"; 
$userr = "root"; 
$pas = ""; 
$database = "my_first_database";
$ll = mysqli_connect($servername, $userr, $pas, $database);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tname = $_POST['taskname'];
    $tdescription = $_POST['taskdescription'];
    $person_ = $_POST['person'];
    if (!empty($tname) && !empty($tdescription) && !empty($person_)) {
        $sqlll = "INSERT INTO `task` (`task_name`, `task_description`, `assign_to`) VALUES ('$tname', '$tdescription', '$person_')";
    }
    else {
        echo "fill up the required fields <br>";
    }
    if ($ll->query($sqlll) === TRUE ) {
        echo "New record created successfully";
    }
}
?>