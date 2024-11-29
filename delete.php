<?php
include 'temp/database.php';
if (!empty($_POST)){
    var_dump($_POST);
    $Id_zakaz = $_POST['Id_zakaz'];
  $id_user = $_POST['id_user'];
  $id_tovar = $_POST['id_tovar'];
  $col = $_POST['col'];
  $date_zakaza = $_POST['date_zakaza'];
  $adres_dostavki = $_POST['adres_dostavki'];
  $status = $_POST['status'];
  $sql = "DELETE * FROM `zakaz`WHERE Id_zakaz = 'Id_zakaz'";
  $result = $mysqli->query($sql);
  header("location:person.php");
}