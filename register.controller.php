<?php
require_once('connection.php');

class Admin extends Database{
    private $name;
    private $email;
    private $password;
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function register(){
        $stm = $this->con->prepare("INSERT INTO admin (name, email, password) VALUES (?,?,?)");
        $stm->execute([$this->name, $this->email, $this->password]);
    }
}


$newAdmin = new Admin();
$newAdmin->setName($_POST['name']);
$newAdmin->setEmail($_POST['email']);
$newAdmin->setPassword($_POST['password']);

// if ($newAdmin->register()) {
//     echo "User registered successfully!";
// } else {
//     echo "Error registering user.";
// }
