<?php
    if(isset($_POST['registration'])){
        $con = new mysqli("localhost", "root", "", "newssite");
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $fName = strip_tags($_POST['name']);
        $password = md5(strip_tags($_POST['password']));  
        $con->query("INSERT INTO users(full_name, email, username, password) VALUES ('$fName', '$email', '$username', '$password')");                                                                                                                                            
        echo "Registration successful!";
        header("refresh:2;url=./index.php");
    } else {
    	header('Location: ./index.php');
    }
?>