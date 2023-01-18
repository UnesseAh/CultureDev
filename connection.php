<?php

class Database {
    private $dsn = 'mysql:host=localhost; dbname=culturedev';
    private $username = 'root';
    private $password = '';
    public $con;
    public function __construct(){
        try {
            $this->con = new PDO($this->dsn, $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'Connection failed' . $e->getMessage();
        }
    }
    public function __destruct(){
        $this->con = null;
    }
}