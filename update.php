<?php
$conn = mysqli_connect("localhost","root","","trs");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $itemName= $_POST['name'];
    $itemPrice= $_POST['price'];
    $sql = "UPDATE products SET title='$itemName',price='$itemPrice' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
        }
}