const express = require("express");
const database = require('./db_connection');
let mysql = require('mysql');

var connection = mysql.createConnection(database);

const app = express();
var allOrders = "";
database.query("SELECT * FROM orders", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
    allOrders = result;
    console.log(allOrders + " A vibe check");

});
// console.log(TestingName);
console.log(allOrders + " A vibe check");

// con.query("SELECT * FROM orders", function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
// });