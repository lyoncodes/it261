<?php
$title = "Player Views";
$headline="welcome to the players view";

include('config.php');
include('includes/header.php');

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: people.php');
}

$sql = 'SELECT * FROM Players WHERE player_id = '.$id.'';

include('includes/iterate-db.php');

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $player_firstname = stripslashes($row['player_firstname']);
    $player_lastname = stripslashes($row['player_lastname']);
    $email = stripslashes($row['email']);
    $birthdate = stripslashes($row['birthdate']);
    $occupation = stripslashes($row['occupation']);
    $description = stripslashes($row['description']);
    $blurb = stripslashes($row['blurb']);
    $feedback = '';
  }
} else {
    $feedback = 'There is an error';
}
?>

<h2> Welcome to <?=$player_firstname;?>'s page</h2>

<?php
if($feedback == '') {
  echo '<ul>';
  echo '<li>First Name: '.$player_firstname.'</li>';
  echo '<li>Last Name: '.$player_lastname.'</li>';
  echo '<li>Email: '.$email.'</li>';
  echo '</ul>';
  echo '<p>'.$description.'</p>';
  echo '<p> Return to the <a href="people.php">people page!</a></p>';
}
?>
</main>
<aside>
  <?php 
    if($feedback == '') {
      echo '<img src="images/player'.$id.'.jpeg" alt="'.$player_lastname.'">';
      echo '<p class="blurb">'.$blurb.'</p>';
    }
  ?>
</aside>
<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');

