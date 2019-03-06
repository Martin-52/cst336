<?php

//Validates that username is NOT contained in the password


$username = $_GET['username'];
$password = $_GET['pwd'];


$data = array();

if (stripos($password, $username) !== false) {
    //echo "Username is included in password!";
    $data["validPwd"] = false;
} else {
   // echo "Username is NOT included in password!";
   $data["validPwd"] = true;
}


echo json_encode($data);
?>