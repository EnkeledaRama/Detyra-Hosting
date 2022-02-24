<?php


$first_name = $_POST['first_name'] ;
$last_name = $_POST['last_name'] ;
$email = $_POST['email'] ;
$password = $_POST['password'] ;

$conn = new mysqli ('localhost' ,'root', '', 'hosting');

$sql = "INSERT INTO signup(first_name, last_name, email, password) 
        VALUES ('$first_name', '$last_name', '$email', '$password')";

    if($conn -> query($sql) === true){
        echo "Data inserted";
    } else {
        echo "Error: ".$sql."<br>" .$conn->error;
    }

?>