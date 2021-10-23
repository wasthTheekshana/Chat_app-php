<?php

$conn = mysqli_connect("localhost","root","123","chat_app","3307");
if (!$conn){
    echo "Database COnnected".mysqli_connect_error();
}


?>
