<?php
$title="pets";
$headline="welcome to the pets gallery";

include('config.php');
include('includes/header.php');


$sql = 'SELECT * FROM Pets';


include('includes/iterate-db.php');
?>
<div class="mt-5">
  <table>
    <?php
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
          <th></th>
          <td>
            <img src="../assets/images/pet'.$row['pet_id'].'.jpeg" alt="'.$row['pet_name'].'" class="thumbnail">
          </td>
          <th>Name</th>
          <td>'.$row['pet_name'].'</td>
          <th>Weight</th>
          <td>'.$row['weight'].'</td>
          <th>Color</th>
          <td>'.$row['color'].'</td>
          <th>Description</th>
          <td>'.$row['description'].'</td>
        </tr>';
      }
    } else {
      echo 'Error';
    }
    ?>
  </table>
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