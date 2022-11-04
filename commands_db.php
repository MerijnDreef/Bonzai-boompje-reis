<?php
require "connectionDb.php";

function getAllOrders(){
    $conn = dbConnect();
    $stmt = $conn->prepare("SELECT * FROM orders");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}

function createOrder($customer_name, $customer_id, $order_price, $order_gram) {
    $conn = dbConnect();
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_id, order_price, order_gram) VALUES (:customer_name, :customer_id, :order_price, :order_gram)");
    $stmt->execute([':customer_name' => $customer_name, ':customer_id' => $customer_id, ':order_price' => $order_price, ':order_gram' => $order_gram]);
    return $stmt->errorCode();
}
?>