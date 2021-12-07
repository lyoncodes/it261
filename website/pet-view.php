<?php
$title = "Pet Views";
$headline="Check Out This Dog";

include('config.php');
include('includes/header.php');

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: project.php');
}

$sql = 'SELECT * FROM Pets WHERE pet_id = '.$id.'';

include('includes/iterate-db.php');

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $pet_name = stripslashes($row['pet_name']);
    $breed = stripslashes($row['breed']);
    $weight = stripslashes($row['weight']);
    $color = stripslashes($row['color']);
    $description = stripslashes($row['description']);
    $feedback = '';
  }
} else {
    $feedback = 'There is an error';
}
?>
<div class="col-12 mt-5">
  <h1><?=$pet_name?></h1>
</div>
<div class="col-3"></div>
<div class="col-3">
  <?php
    if($feedback == '') {
      echo '<div class="text-left">';
      echo '<p>Breed: '.$breed.'</p>';
      echo '<p>Weight: '.$weight.'</p>';
      echo '<p>Color: '.$color.'</p>';
      echo '<p>Description: '.$description.'</p>';
      echo '<p> Return to the <a href="gallery.php" class="slime p-0">gallery page!</a></p>';
      echo '</div>';
    }
  ?>
</div>

<div class="col-3">
  <div class="card plane">
    <?php 
      if($feedback == '') {
        echo '<img src="../assets/images/pet'.$id.'.jpeg" alt="'.$pet_name.'" class="thumbnail">';
        echo '<p class="blurb">'.$color.'</p>';
      }
    ?>
  </div>
</div>
<div class="col-3"></div>
<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');

