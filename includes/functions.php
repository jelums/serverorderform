<?php

// Get the mysql configuration from a file
//require 'config.php';

$config = array(
  'username' => 'root',
  'password' => ''
);

// Connect to the Database
function connect($config)
{
try {

  $conn = new PDO('mysql:host=localhost;dbname=serverorderform',
                                          $config['username'],
                                          $config['password']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $conn;
} catch (PDOException $e) {
    return false;
}
}


// Get new orders
function uudet($tableName, $conn)
{
  try {
    $result = $conn->query("SELECT * FROM user WHERE status = 0");
    return ( $result->rowCount() > 0 )
      ? $result
      : false;
  } catch(Exception $e) {
    return false;
  }
}

// Get Accepter orders
function hyvaksytyt($tableName, $conn)
{
  try {
    $result = $conn->query("SELECT * FROM user WHERE status = 1");
    return ( $result->rowCount() > 0 )
    ? $result
    : false;
  } catch(Exception $e) {
    return false;
  }
}

// Get discarded orders
function hylatyt($tableName, $conn)
{
  try {
    $result = $conn->query("SELECT * FROM user WHERE status = 2");
    return ( $result->rowCount() > 0 )
    ? $result
    : false;
  } catch(Exception $e) {
    return false;
  }
}

// Get deletet orders
function poistetut($tableName, $conn)
{
  try {
    $result = $conn->query("SELECT * FROM user WHERE status = 3");
    return ( $result->rowCount() > 0 )
    ? $result
    : false;
  } catch(Exception $e) {
    return false;
  }
}

// Basic Query
function query($query, $bindings, $conn)
{
    $stmt = $conn->prepare($query);
    $stmt->execute($bindings);

}

// Count the new orders
function laskuri($table, $conn){
  $result = $conn->query("SELECT * FROM user WHERE status = 0");
  return ($result->rowCount());

}

// Accept the order
function hyvaksy($query, $bindings, $conn)
{
  $stmt = $conn->query("UPDATE FROM user SET status VALUES 0");
  $stmt->execute($bindings);
}

// Test input data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
