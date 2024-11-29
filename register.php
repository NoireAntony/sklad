<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';
$message = ''; 
if (!empty ($_POST)) {
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
        $sql = "INSERT INTO users (fio, login, password, tel, email) VALUES ('$fio', '$login', '$password', '$tel', '$email')";
        $result = $mysqli->query($sql);
        if ($result) {
            header('location: autorization.php');
        } else {
            $message = "Ошибка при записи в БД";
        }
    }
    if (array_key_exists( "defaut", $_GET) && !is_null ($_GET[ 'default']) ) {
        $defaut = $_GET['defaut'];
        if (stripos ($defaut, "<script") !== false){
          header ("location: ?default=English");
          exit;
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text">Регистрация</h1>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" class="form-control" name="fio" placeholder="Cимволы кириллицы и пробелы" pattern="^[А-Яа-яЁё\s]+$" required>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Введите логин</label>
                    <input type="text" class="form-control" name="login"  required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Введите пароль</label>
                    <input type="password" class="form-control" name="password"  required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Подтвердите пароль</label>
                    <input type="password" class="form-control" name="confirm_password"required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Телефон</label>
                    <input type="number" class="form-control" name="tel"required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="ivanivanov@mail.ru" required>
                </div>
                <div id="message" class="form-text"><b><?= $message ?></b></div>
                <div class="text">
                    <button type="submit" class="btn btn-success">Зарегистрироваться</button><br><br>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>