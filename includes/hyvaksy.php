<?php

require '../includes/functions.php';

$conn = connect($config);
if ( $conn ) {
  echo 'Tietokanta yhteys toiminnassa';
} else {
  echo 'Virhe yhdistettäessä tietokantaan';
}


$id = $_GET['id'];

$sql = "UPDATE user SET status = 1 WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam( ':id' , $id );
$stmt->execute();

$conn = null;
