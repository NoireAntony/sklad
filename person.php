<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php'; 
?>
<main>
<h1 style="color:green; text-align:center;">Личный кабинет</h1>
<h3> Мои заказы<h3>
</div>
<div class="container">
<div class="row">
    <table class="table">
        <tr>
  <th>Номер Заказа</th>
    <th>Дата заказа</th>
            <th>Количество</th>
    <th>Адрес доставки </th>
    <th>Статус заказа</th>
        </tr>  
<?php
$id_user=$_SESSION ['id_user'];
$id_tovar=$_SESSION ['id_tovar'];
$sql = "SELECT * FROM `zakaz`WHERE id_user= '{$_SESSION ['id_user']}'";
$result =  $mysqli->query($sql);
if(!empty($result))
foreach( $result as $row){   
echo  '<tr><td>' . $row['Id_zakaz'] . '</td>
<td>' . $row['date_zakaza'] . '</td>
<td>' . $row['col'] . '</td>
<td>' . $row['adres_dostavki'] . '</td>
<td>' . $row['status'] . '</td>;
<td>'. '<form action = "delete.php" method ="post">
<input type="hidden" name = "Id_zakaz" value = ' . $row["Id_zakaz"] 
. ' ><input type = "submit" value = "Удалить"></form>"</td></tr>';
}
?>
</table>
</div>  
</div>
    </table>
</div>  
</div>
<?php 
include 'temp/footer.php';  
?>
