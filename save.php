<?php
$conn = mysqli_connect("localhost","root","","trs");

if(isset($_POST['save'])){
    $itemName= $_POST['name'];
    $itemPrice= $_POST['price'];
    $sql = "INSERT INTO products (title,price) VALUES ('$itemName','$itemPrice')";
    if (mysqli_query($conn,$sql)){
        header('Location:index.php');
    }
}
