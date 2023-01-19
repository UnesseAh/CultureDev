<?php

require_once('connection.php');

// class Category extends Database {
//     public function insert($categoryName){
//         $stm = $this->con->prepare("INSERT INTO categories(category) VALUES (?)");
//         $stm->execute([$categoryName]);
//     }
// }

// $newCategory = new Category();
// $newCategory->insert($_POST['category']);


class Crud extends Database{
    public function create($tableName, $data=array()){
        $tableColumns = implode(',', array_keys($data));
        $tableValue = implode("','", $data);

        $stm = $this->con->prepare("INSERT INTO $tableName ($tableColumns) VALUES ('$tableValue')");
        $stm->execute();
    }

    public function read($tableName, $rows="*", $where = null){
        if ($where != null){
            $sql = "SELECT $rows FROM $tableName WHERE $where";
        }else{
            $sql = "SELECT $rows FROM $tableName";
        }
        $stmt = $this->pdo->query($sql);
        $this->sql = $stmt->fetchAll();
    }
}
