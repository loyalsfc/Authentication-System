<?php
require "connection.php";

$username = "";
$first_name = "";
$middle_name = ""; 
$last_name = "";
$email = ""; 
$contact = ""; 
$sex ="";
$password = "";

function validate($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

// User register 
if (isset($_POST['signup'])) {
    $username = validate($_POST['username']);
    $first_name = validate($_POST['first_name']);
    $middle_name = validate($_POST['middle_name']); 
    $last_name = validate($_POST['last_name']);
    $email = validate($_POST['email']); 
    $contact = validate($_POST['contact']); 
    $sex = validate($_POST['sex']);
    $password = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);

    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email' ;";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        $_SESSION['status']="Username or Password is taken please try again";
			header('Location: ../signup.php');
    }else{
        if ($password == $confirm_password) {
            $sql = "INSERT INTO users (username, first_name, middle_name, last_name, email, contact, sex, password)
            VALUES ('$username', '$first_name', '$middle_name', '$last_name', '$email', '$contact', '$sex', '$password');";
            $result = $connection->query($sql);
            if ($result) {
                $_SESSION['status']="Registration was successful";
                header('Location: index.php');
            }else{
                $_SESSION['status']="Sorry an error occured";
                header('Location: signup.php');
            }
            
        }
    }

}




// user login
if (isset($_POST["login"])) {
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
   
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    
            $_SESSION['username'] = $row["username"] ;
            $_SESSION['first_name'] = $row["first_name"];
            $_SESSION['middle_name'] = $row["middle_name"]; 
            $_SESSION['last_name'] = $row["last_name"];
            $_SESSION['email'] = $row["email"]; 
            $_SESSION['contact'] = $row["contact"]; 
            $_SESSION['sex'] = $row["sex"];
        }
        header('Location: welcome.html');
        
    }else{
        echo "Sorry an error occured";
        header('Location: index.php');
    }

}


$connection->close();
?>s