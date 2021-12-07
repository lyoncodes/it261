<?php
$title="pets";
$headline="welcome to the pets gallery";

include('config.php');
include('includes/header.php');

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: project.php');
}

$sql = 'SELECT * FROM Pets';

include('includes/iterate-db.php');
?>
<div class="mt-5">
  <?php
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '<table>';
      echo '<tr>';
      echo '<th>Name</th>';
      echo '<td>'.$row['pet_name'].'</td>';
      echo '</tr>';
      
      echo '<tr>';
      echo '<th>Description</th>';
      echo '<td>'.$row['description'].'</td>';
      echo '</tr>';
      
      echo '<tr>';
      echo '<img src="../images/pet'.$id.'.jpeg" alt="'.$pet_name.'" class="thumbnail">';
      echo '</tr>';
      echo '</table>';
    }
  } else {
    echo 'Error';
  }
  ?>
</div>
<?php
mysqli_free_result($result);
mysqli_close($iConn);
?>
<div>
  <h3>Dogs Always Take The Shortest Routes to Treats. What Could We Ever Learn From THAT!?</h3>
</div>
<?php
include('includes/footer.php');