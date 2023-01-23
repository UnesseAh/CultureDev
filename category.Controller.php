<?php

@include('./connection.php');
@include('./crud.php');


if(isset($_POST['addNewCategory'])){
    $category = $_POST['category'];

    $newCategory = new Crud();
    $newCategory->create("categories", ['category'=>$category]);
    header('location: dashcategories.php');

}

if(isset($_POST['editCategory'])){
    $id = $_POST['categoryInputId'];
    $category = $_POST['category'];

    $editCategory = new Crud();
    $editCategory->update('categories', ['category' => $category], $id);
    header('location: dashcategories.php');

}


if(isset($_POST['deleteCategory'])){
    $id = $_POST['categoryId'];

    $deleteCat = new Crud();
    $deleteCat->delete('categories', "$id");
    header('location: dashcategories.php');

}
