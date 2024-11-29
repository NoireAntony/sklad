<?php
include 'temp/database.php';
include 'temp/head.php';
include 'temp/navmanager.php';
?>
<h1>Заказы</h1>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Номер заказа</th>
                    <th>Фамилия имя отчество</th>
                    <th>email</th>
                    <th>Дата заказа</th>
                    <th>Количество</th>
                    <th>Адрес доставки</th>
                    <th>Статус заказа</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM  zakaz, users WHERE zakaz.id_user=users.id_user"; 
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['Id_zakaz'] . '</td>';
                        echo '<td>' . $row['fio'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['date_zakaza'] . '</td>';
                        echo '<td>' . $row['col'] . '</td>';
                        echo '<td>' . $row['adres_dostavki'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                        echo '<td>
                                <form action="change.php" method="post">
                                    <input type="hidden" name="Id_zakaz" value="' . $row["Id_zakaz"] . '">
                                    <input type="submit" value="Изменить">
                                </form>
                              </td>';
                        echo '</tr>';
                    }
              
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include 'temp/footer.php';
?>
