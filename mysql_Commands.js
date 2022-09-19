const express = require("express");
const database = require('./db_connections');

const app = express();

con.query("SELECT * FROM orders", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
  
  function addOrder(name) {
    con.query("SELECT * FROM orders", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
      console.log(name);
    });
  }