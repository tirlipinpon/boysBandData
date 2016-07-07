<?php
 $DBhost = "localhost";
 $DBuser = "root";
 $DBpass = "";
 $DBname = "boysbandmuz";



 try{

  $dbh = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $ex){

  die( $ex->getMessage());
 }

?>
