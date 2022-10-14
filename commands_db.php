<?php
require "connectionDb.php";

echo "Big bois";


function getAllOrders(){
    $conn = dbConnect();
    $stmt = $conn->prepare("SELECT * FROM orders");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}