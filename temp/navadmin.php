<?php
session_start();
?>
<header>

    <div class="container"style="width: 1200px;background-color:green;">
        <div class="row">
         <div class="col-lg-6">
            <div class="head-item logo">
              <img src="img/flor.jpg" class="img-fluid"style="width: 50px;height: 60px;padding-top: 15px; padding-right: 7px; padding-bottom:9px;">
           
             
</div>
</div>
<div class="col-lg-6" style="display:flex; flex-direction:row; ">
        

        
        <a class="nav-link active" aria-current="page" href="manager.php"style="color:white">Заказ клиента</a>
      </li>
     <a class="nav-link active" aria-current="page" href="logout.php"style="color:white">Выйти</a>
      </li>
     

      <?php

$id_user= $_SESSION["id_user"];
$sql = "select * from users where id_user='$id_user'";
$result =  $mysqli->query($sql);
//var_dump($result);
foreach($result as $row)
{
  echo "<p style='color:white;'>".$row['fio']."</p>";
}   
     ?> 
      </div>   
</div>
</div>     
      
     </header>