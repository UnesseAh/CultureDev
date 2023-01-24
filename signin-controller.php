<?php

require_once('connection.php');

class SignIn extends Database{
    public function checkAdminInDatabase($email, $password){
        try {
            $stm = $this->con->prepare("SELECT * FROM admin WHERE email = ?");
            $stm->execute([$email]);
            $admin = $stm->fetch();
            if($admin){
                if(password_verify($password, $admin['password'])){
                    header("location: dasharticles.php");
                }else {
                    echo 'Invalid Password';
                }
            }else {
                echo 'Invalid email';
            }
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}

$adminLogin = new SignIn();
$adminLogin->checkAdminInDatabase($_POST['email'], $_POST['password']);