<?php
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
//check email is validate or not
    if (filter_var($email ,FILTER_VALIDATE_EMAIL)){
    //check the email is already exits
        $sql = mysqli_query("SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0){
            echo "Email is already exits";
        }else{
            //user upload files or not
            

        }
    }else{
        echo "Email is not validate";
    }
}else{
    echo "All field are required ";
}


?>
