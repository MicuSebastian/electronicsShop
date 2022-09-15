<?php
  $id = $_GET['id'];
	$cantitate = $_GET['cantitate'];

  $conn = oci_connect("system","Parola1234","localhost/XE");

  $delete = "DELETE FROM comenzi WHERE id='$id' AND cantitate='$cantitate'";
  ($rezultat = oci_parse($conn, $delete))
      or die("Cerere SQL esuata: ".oci_error($conn)."<br>\n");

  oci_execute($rezultat);

  header("Location: cart.php");
  exit;
?>
