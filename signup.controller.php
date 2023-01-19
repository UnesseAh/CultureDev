<?php
require_once('connection.php');

class Admin extends Database {
    public function register($name, $email, $password, $confirmPassword){
        if(!$email) {
            echo 'You didn\'t type anything in the email';
            return;
        }
        if($password != $confirmPassword){
            echo ' Password doesn\'t match';
            return;
        }
        $stm = $this->con->prepare("SELECT email FROM admin WHERE email = ?");
        $stm->execute([$email]);
        if($stm->rowCount() > 0) {
            echo 'This email already exist';
            return;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'This is an invalid email address';
            return;
        }
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stm = $this->con->prepare("INSERT INTO admin(name, email, password) VALUES (?, ?, ?)");
        $stm->execute([$name, $email, $hashedPassword]);
    }
}


$newAdmin = new Admin();
$newAdmin->register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirmPassword']);


