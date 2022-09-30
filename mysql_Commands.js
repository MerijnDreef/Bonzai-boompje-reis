// const express = require('express');
const database = require('./db_connection.js');
const mysql = require('mysql');

var connection = mysql.createConnection(database);

// const app = express();
var allOrders = "";

// make this code into a function
// return all orders
export function getAllOrders() {
    database.query("SELECT * FROM orders", function (err, result, fields) {
        if (err) throw err;
        console.log(result);
        // console.log(fields);
        allOrders = result;
        console.log(allOrders + " A vibe check");
    });
    return allOrders;
}
// export default allOrders;
// var customerName = TestingName;
// console.log(customerName + " Boi");

// database.query("INSERT INTO orders (customer_name, customer_id, order_price, order_gram) VALUES ('" + customerName + "', '" + customerID + "', '" + orderPrice + "', '" + orderGram + "')", function (err, result) {
//     if (err) throw err;
//     console.log(result);
//     // allOrders = result;
//     // console.log(allOrders + " A vibe check");

// });
// console.log(TestingName);
console.log(allOrders + " A vibe check part 2");

// con.query("SELECT * FROM orders", function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
// });