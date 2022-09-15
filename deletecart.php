<?php

  $conn = oci_connect("system","Parola1234","localhost/XE");

  $delete = "DELETE FROM comenzi";
  ($rezultat = oci_parse($conn, $delete))
      or die("Cerere SQL esuata: ".oci_error($conn)."<br>\n");

  oci_execute($rezultat);

  header("Location: index.php");
  exit;
?>
