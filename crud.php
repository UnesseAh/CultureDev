<?php

require_once('connection.php');

class Crud extends Database{
    public function create($tableName, $data=array()){
        print_r($data);
        $tableColumns = implode(',', array_keys($data));
        $tableValue = implode("','", $data);
        $stm = $this->con->prepare("INSERT INTO $tableName ($tableColumns) VALUES ('$tableValue')");
        $stm->execute();
    }

    public function read($tableName, $rows = "*", $where = null){
        if ($where != null){
            $sql = "SELECT $rows FROM $tableName INNER JOIN categories ON articles.category_id = categories.id WHERE $where";
        }else{
            $sql = "SELECT $rows FROM $tableName ";
        }
        $stmt = $this->con->query($sql);
        $sql = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sql;
    }

    public function update($tableName, $data=array(), $id){
        var_dump($tableName, $data, $id);
        $set = '';
        $args = array();
        foreach ($data as $column => $value) {
            $set .= "$column = ?,";
            $args[] = $value;
        }
        $set = rtrim($set, ',');
        $sql = "UPDATE $tableName SET $set WHERE id = ?";
        $stm = $this->con->prepare($sql);
        $args[] = (int)$id;
        return $stm->execute($args);
    }

    public function delete($tableName, $id){
        $sql = "DELETE FROM $tableName WHERE id = $id";
        $stm = $this->con->prepare($sql);
        $stm->execute();
    }
}
