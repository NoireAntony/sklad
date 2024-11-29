<?php
include 'temp/database.php';
if (!empty($_POST)){
    var_dump($_POST);
    $Id_zakaz = $_POST['Id_zakaz'];
  $sql = "UPDATE  zakaz  SET  `status` =' отправлен' ,`date_zakaza` ='2023-03-20'  WHERE Id_zakaz  =  ('$Id_zakaz')";
  $result =  $mysqli->query($sql);
  header("location:manager.php");
}