<?php
$title="people";
$headline="welcome to the people page";

include('config.php');
include('includes/header.php');

$sql = 'SELECT * FROM Players';

include('includes/iterate-db.php');

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<p>For more info about '.$row['player_firstname'].', please click <a href="player-view.php?id='.$row['player_id'].'">here</a></p>';
    echo '<ul>';
    echo '<li>'.$row['player_firstname'].'</li>';
    echo '<li>'.$row['player_lastname'].'</li>';
    echo '<li>'.$row['email'].'</li>';
    echo '</ul>';
    echo '<hr>';
  }
} else {
  echo 'Error';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>
</main>
<aside>
  <h3>This is painful to watch</h3>
</aside>
<?php
include('includes/footer.php');