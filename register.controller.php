<?php
require_once('connection.php');

class Admin extends Database{
    public function register($name, $email, $password, $confirmPassword){
        // Check if the email is not empty
        if(!$email) {
            echo 'You didn\'t type anything in the email';
            return;
        }
        // Check if password is a match
        if($password != $confirmPassword){
            echo ' Password doesn\'t match';
            return;
        }
        // Check if the email exist in the database
        $stm = $this->con->prepare("SELECT email FROM admin WHERE email = ?");
        $stm->execute([$email]);
        if($stm->rowCount() > 0) {
            echo 'This email already exist';
            return;
        }
        // Check if the email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'This is an invalid email address';
            return;
        }
        // Hash the password 
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        // Inset the name, email, password into the database
        $stm = $this->con->prepare("INSERT INTO admin(name, email, password) VALUES (?, ?, ?)");
        $stm->execute([$name, $email, $hashedPassword]);
    }
}


$newAdmin = new Admin();
$newAdmin->register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirmPassword']);


