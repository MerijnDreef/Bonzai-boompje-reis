var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "mysql",
  database: "bonzai_boom_reis"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("SELECT * FROM orders", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
