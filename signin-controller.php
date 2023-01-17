<?php

require_once('connection.php');

class SignIn extends Database{
    private $email;
    private $password;
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function checkAdminInDatabase(){
        try {
            $stm = $this->con->prepare("SELECT * FROM admin WHERE email = ?");
            $stm->execute([$this->email]);
            $number = $stm->fetch();
            if($number){
                header("location: dashboard.html");
            }
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}

$adminLogin = new SignIn();
$adminLogin->setEmail($_POST['email']);
$adminLogin->setPassword($_POST['password']);
$adminLogin->checkAdminInDatabase();