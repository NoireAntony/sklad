<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();
$id_user = $_SESSION['id_user'];
if (!empty($_POST)) {
  $id_tovar = $_POST['id_tovar'];
  $col = $_POST['col'];
  $date_zakaza =$_POST['date_zakaza'];
  $adres_dostavki = $_POST['adres_dostavki'];
  $status = $_POST['status'];
  $sql = "INSERT INTO zakaz(id_user, id_tovar, col, date_zakaza, adres_dostavki, status) VALUES ('$id_user', '$id_tovar', '$col', '$date_zakaza', '$adres_dostavki', '$status')";
  $result = $mysqli->query($sql);
  var_dump($_POST);
  if ($result) {
    header('location:person.php');
  } else {
    $message = 'Ошибка' . $sql;
  }
}
?>
<main>
  <div class="container">
    <div class="row">
        <h1 >Заказ</h1>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="inputDelivery" class="form-label">Выберите товар</label>
            <select class="form-select" name="id_tovar" required>
              <?php
              $tovar= $mysqli->query("SELECT id_tovar, name_tovar FROM tovar");
              foreach ($tovar as $list) {
                echo '<option value="'.$list["id_tovar"].'">'.$list["name_tovar"].'</option>';
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="amount" class="form-label">Укажите количество</label>
            <input type="number" class="form-control" id="col" name="col" required>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Дата заказа</label>
            <input type="date" class="form-control" id="date_zakaza" name="date_zakaza" required>
          </div>
          <div class="mb-3">
            <label for="adres" class="form-label">Адрес доставки</label>
            <input type="text" class="form-control" id="adres_dostavki" name="adres_dostavki" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Статус заказа</label>
            <input type="text" class="form-control" id="status" name="status" required>
          </div>
            <button type="submit" class="btn btn-success">Заказать</button><br><br>
          </div>
        </form>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </div>
</main>