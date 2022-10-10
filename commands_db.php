<?php
require "connectionDb.php";

console.log("it works");

function getAllOrders(){
    $conn = dbConnect();
    $stmt = $conn->prepare("SELECT * FROM orders");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}