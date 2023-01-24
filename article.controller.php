<?php

@include_once('./connection.php');
@include('./crud.php');


if(isset($_POST['addNewArticle'])){
    for($i = 0; $i < count($_POST['title']) ; $i++){
        $title = $_POST['title'][$i];
        $author = $_POST['author'][$i];
        $category = $_POST['category'][$i];
        $content = $_POST['content'][$i];
        $image = $_FILES['image']['name'][$i];
        $image_temp = $_FILES['image']['tmp_name'][$i];
        $upload_dir = './src/img/';
        $upload_file = $upload_dir . $image;
        move_uploaded_file($image_temp, $upload_file);
    
        $newCategory = new Crud();
        $newCategory->create("articles", ['title'=>$title, 'author'=>$author, 'image'=>$image, 'category_id'=>$category, 'body'=>$content]);
    }

    header('location: ./dasharticles.php');
}


if(isset($_POST['editArticle'])){
    for ($i = 0; $i < 1; $i++){
        $id = $_POST['modalId'];
        $title = $_POST['title'][0];
        $author = $_POST['author'][0];
        $category = $_POST['category'][0];
        $content = $_POST['content'][0];
    
        $editArticle = new Crud();
        $editArticle->update('articles', ['title'=>$title,'author'=>$author, 'category_id'=>$category, 'body'=>$content], $id);
    }
    header('location: ./dasharticles.php');
}


if(isset($_POST['deleteArticle'])){
    $id = $_POST['id'];

    $deleteArticle = new Crud();
    $deleteArticle->delete('articles', $id);
    header('location: ./dasharticles.php');
}


function shown(){
    $display = new Crud();

     $categories = $display->read('categories', '*');

    foreach ($categories as $categoryData) {
        $categoryId = $categoryData['id'];
        $category = $categoryData['category'];
        echo '<option value='.$categoryId.'> ' . $category . '</option>';
        }
    }
    