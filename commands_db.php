<?php
require "connectionDb.php";


function getAllOrders(){
    $conn = dbConnect();
    $stmt = $conn->prepare("SELECT * FROM orders");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}


echo $_GET["gram"];
echo $_GET["price"];
// function createOrder(){
//     $conn = dbConnect();
//     $stmt = $conn->prepare("INSERT INTO orders");
// }