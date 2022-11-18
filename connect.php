<?php

$mysqli = new mysqli('localhost', 'root', '', 'library') or die($mysqli->error);

$id = 0;
$update = false;

//adding books
if(isset($_POST['addBook'])){

    //passing the input values into variables by using $post method
    $title = $_POST['title'];
    $author = $_POST['author'];
    $releaseDate = $_POST['releaseDate'];

    //inserting data into books
    $mysqli->query("INSERT INTO books (title, author, releaseDate) VALUES ('$title', '$author', '$releaseDate')") or die($mysqli->error);
    
    header('location: index.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM books where id=$id");
}

//editing a book
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $res = $mysqli->query("SELECT * FROM books WHERE id=$id");

    if(count(array($res))==1){
        $row = $res->fetch_array();
        $title = $row['title'];
        $author = $row['author'];
        $releaseDate = $row['releaseDate'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $releaseDate = $_POST['releaseDate'];

    $mysqli->query("UPDATE books SET title='$title', author='$author', releaseDate='$releaseDate' where id=$id");

    header('location: listBooks.php');
}