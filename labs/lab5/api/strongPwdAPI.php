<?php

//echo "topS3c3t!";

$data = array();

$pwdLength = $_GET['length'];

$password = "";

$lettersArray = range("a", "z");

for ($i = 0; $i < $pwdLength; ++$i) {
    $randomIndex = rand(0, 25);
    $password .= $lettersArray[$randomIndex];
}

$password[0] = rand(0, 9);
$password = str_shuffle($password); //Shuffles the letters of the string

$data["suggestedPwd"] = $password;

//echo $password;

echo json_encode($data);


?>