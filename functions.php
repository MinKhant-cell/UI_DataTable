<?php

function products(){
    $sql = "SELECT * FROM products";
    $query= mysqli_query(conn(),$sql);
    $rows=[];
    while ($row= mysqli_fetch_object($query)){
        array_push($rows,$row);
    }
    return $rows;
}

function createProduct(){
    $itemName= $_POST['name'];
    $itemPrice= $_POST['price'];
    $sql = "INSERT INTO products (title,price) VALUES ('$itemName','$itemPrice')";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

function showAlert($type,$message){
    return "<p class='alert alert-$type'>$message</p>";
}

function product($id){
    $sql = "SELECT * FROM products WHERE id=$id";
    $query = mysqli_query(conn(),$sql);

    return mysqli_fetch_object($query);
}

function updateProduct(){
    $id = $_POST['id'];
    $itemName= $_POST['name'];
    $itemPrice= $_POST['price'];
    $sql = "UPDATE products SET title='$itemName',price='$itemPrice' WHERE id=$id";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

function deleteProduct($id){
    $sql= "DELETE FROM products WHERE id= $id";

    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}