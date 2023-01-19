<?php

@include('./connection.php');
@include('./crud.php');


if(isset($_POST['addNewCategory'])){
    $category = $_POST['category'];

    $newCategory = new Crud();
    $newCategory->create("categories", ['category'=>$category]);
}
