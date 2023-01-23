<?php
include_once('./connection.php');

class getStatistics extends Database {
    public function getTotalArticles(){
        $stm = $this->con->prepare("SELECT COUNT(title) FROM articles");
        $stm->execute();
        return $stm->fetchColumn();
    }

    public function getTotalCategories(){
        $stm = $this->con->prepare("SELECT COUNT(id) FROM categories");
        $stm->execute();
        return $stm->fetchColumn();
    }

    public function getUniqueAuthors(){
        $stm = $this->con->prepare("SELECT COUNT(DISTINCT author) FROM articles");
        $stm->execute();
        return $stm->fetchColumn();
    }
}