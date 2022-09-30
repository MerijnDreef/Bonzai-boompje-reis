// const http = require('http');
const mysql = require('mysql');

var db_con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "mysql",
  database: "bonzai_boom_reis"
});

db_con.connect((err) => {
  if (err) {
    console.log("Database Connection Failed !!!", err);
  } else {
    console.log("connected to Database");
  }
});

module.exports = db_con;

