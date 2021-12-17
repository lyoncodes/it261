<?php
session_start();
include('config.php');
include('includes/header.php');

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: ballpark.php');
}

$sql = 'SELECT Ballpark_Stall_Inventory.product_id, Product.product_description, Product_Supplier.supplier_name,
Ballpark_Stall.stall_name, Ballpark.ballpark_name, Ballpark_Stall.ballpark_id, Ballpark.ballpark_name, Team.team_name, Franchise.franchise_id
FROM Ballpark_Stall_Inventory
INNER JOIN Product
ON Ballpark_Stall_Inventory.product_id = Product.product_id
INNER JOIN Product_Supplier
ON Product.supplier_id = Product_Supplier.supplier_id
INNER JOIN Ballpark_Stall
ON Ballpark_Stall_Inventory.stall_id = Ballpark_Stall.stall_id
INNER JOIN Ballpark
ON Ballpark_Stall.ballpark_id = Ballpark.ballpark_id
INNER JOIN Team
ON Ballpark.team_id = Team.team_id
INNER JOIN Franchise
ON Team.franchise_id = Franchise.franchise_id
WHERE Ballpark_Stall.ballpark_id='.$id.'
ORDER BY supplier_name, franchise_id, ballpark_name';

include('includes/iterate-db.php');

?>
<div class="col-12 mt-5">
  <div class="col-6 img-container center">
    <img src='../assets/images/<?php echo htmlspecialchars($_GET['img']); ?>.png' alt="team logo"></img>
  </div>
  <div class="col-6">
  <?php 
    if(mysqli_num_rows($result) > 0) {
      echo '<h1>'.htmlspecialchars($_GET['name']).' Vendor Products</h1>';
      while($row = mysqli_fetch_assoc($result)) {
        echo '
          <h3>'.$row['product_description'].' - '.$row['supplier_name'].'</h3>
        ';
      }
    }
  ?>
    <a href="ballpark.php">Back to Ballparks</a>
  </div>
</div>
<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
