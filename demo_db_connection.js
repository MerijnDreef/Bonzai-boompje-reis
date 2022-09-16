var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "mysql"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});
