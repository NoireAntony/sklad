<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/nav.php' 
?>
<h1 style="text-align:center; color:green;">Заказ товаров «Авоська»</h1>     
      </div>
    </div>
  </div>
</div>
<main>
<div class="row row-cols-1 row-cols-md-4 g-3">
  <?php
  $sql = "select * from tovar";
  $result =  $mysqli->query("select * from tovar");
  foreach($result as $row)
  {
    echo '<div class="col">
    <div class="card">
      <img src="'.$row["img"].'" class="card-img-top" alt="..." style="width:220px; height:200px; margin-left:30px;">
    <div class="card-body">
      <h5 class="card-text">'.$row["name_tovar"].'</h5>
      <p class="card-price">'.$row["price"].'</p>
    </div>
   <div class="card-footer">
      <form method="post" action="zakaz.php?id_tovar='.$row['id_tovar'].'">
      <button>Сделать заказ</button>
      </form>
   </div>
   </div>
   </div>';
  }
  ?>
</div>
</div>
<?php
include 'temp/footer.php';
?>