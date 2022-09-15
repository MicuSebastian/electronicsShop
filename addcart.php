<?php
	session_start();
  $id = $_GET['id'];
  $nume = $_GET['nume'];
  $pret = $_GET['pret'];
  $cantitate = $_GET['cantitate'];
  $categorie = $_GET['categorie'];
  
	//$imagine = $_GET['imagine'];
	//echo $imagine;

  $conn = oci_connect("system","Parola1234","localhost/XE");

  $insert = "INSERT INTO comenzi (Id, Nume, Pret, Cantitate, Categorie) values ('$id', '$nume', '$pret', '$cantitate', '$categorie')";
  ($rezultat = oci_parse($conn, $insert))
      or die("Cerere SQL esuata: ".oci_error($conn)."<br>\n");

  oci_execute($rezultat);

  header("Location: cart.php");
  exit;
?>
