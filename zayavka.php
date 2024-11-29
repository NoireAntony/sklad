<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();
$id_user = $_SESSION['id_user'];
$id_vakansi = $_SESSION['id_vakansi'];
if (!empty($_POST)) {
  $id_vakansi = $_POST['id_vakansi'];
  $namepred = $_POST['namepred'];
  $spec = $_POST['spec'];
  
  $date_zayavka =$_POST['date_zayavka'];
  $sql = "INSERT INTO zayavka (id_user, id_vakansi, namepred, spec,  date_zayavka) VALUES ('$id_user', '$id_vakansi', '$namepred', '$spec',  '$date_zayavka')";
  $result = $mysqli->query($sql);

  }

?>
<main>
  <div class="container">
    <div class="row">
        <h1 >Заявка</h1>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form action="" method="POST">
      

          <div class="mb-3">
            <label for="inputDelivery" class="form-label">Выберите предприятие</label>
            <select class="form-select" name="id_vakansi" required>
              <?php
              $vakansi= $mysqli->query("SELECT id_vakansi, namepred FROM vakansi");
              foreach ($vakansi as $list) {
                echo '<option value="'.$list["id_vakansi"].'">'.$list["namepred"].'</option>';
              }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="inputDelivery" class="form-label">Выберите должность</label>
            <select class="form-select" name="id_vakansi" required>
              <?php
              $vakansy= $mysqli->query("SELECT id_vakansi, spec FROM vakansi");
              foreach ($vakansy as $list) {
                echo '<option value="'.$list["id_vakansi"].'">'.$list["spec"].'</option>';
              }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Предприятие</label>
            <input type="text" class="form-control" id="namepred" name="namepred" required>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Должность</label>
            <input type="text" class="form-control" id="spec" name="spec" required>
          </div>



          


         
          <div class="mb-3">
            <label for="date" class="form-label">Дата заявки</label>
            <input type="date" class="form-control" id="date_zayavka" name="date_zayavka" required>
          </div>

          
            <button type="submit" class="btn btn-success">Отправить</button><br><br>
          </div>
        </form>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </div>
</main>