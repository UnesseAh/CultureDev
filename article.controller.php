<?php

@include_once('./connection.php');
@include('./crud.php');


if(isset($_POST['addNewArticle'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $upload_dir = './src/img/';
    $upload_file = $upload_dir . $image;
    move_uploaded_file($image_temp, $upload_file);

    $newCategory = new Crud();
    $newCategory->create("articles", ['title'=>$title, 'author'=>$author, 'image'=>$image, 'category_id'=>$category, 'body'=>$content]);
    header('location: ./dasharticles.php');
}


if(isset($_POST['editArticle'])){
    $id = $_POST['modalId'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    $editArticle = new Crud();
    $editArticle->update('articles', ['title'=>$title,'author'=>$author, 'category_id'=>$category, 'body'=>$content], $id);
    header('location: ./dasharticles.php');
}


if(isset($_POST['deleteArticle'])){
    $id = $_POST['id'];

    $deleteArticle = new Crud();
    $deleteArticle->delete('articles', $id);
    header('location: ./dasharticles.php');
}