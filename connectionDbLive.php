<?php
function dbConnect(){
  $servername = "localhost";
  $username = "merijn";
  $password = "+%SBN)~i6";
  $dbname = "merijn_bonzai-reis";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}