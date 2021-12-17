<?php
session_start();
include('config.php');
include('includes/header.php');

$sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id';
include('includes/iterate-db.php');
?>
<div class="mt-5">
  <ul class="ballpark-list">
    <li>
      <?php
      while($row = mysqli_fetch_assoc($result)) {
        echo '
          <div>
            <h1>'.$row['ballpark_name'].'</h1>
            <h2>'.$row['ballpark_address'].'</h2>
            <div>
              <ul class="ballpark-list">
                <li>
                  <h3>Ballpark Capacity: '.$row['ballpark_capacity'].'</h3>
                </li>
                <li>
                  <h3>Vendor Stalls: '.$row['ballpark_vendor_capacity'].'</h3>
                </li>
                <li> 
                  <a href="ballpark-view.php?id='.$row['ballpark_id'].'&name='.$row['ballpark_name'].'&img='.$row['team_name'].'">View '.$row['ballpark_name'].'\'s Licensed Merchandise</a>
                </li>
              </ul>
            </div>
          </div>
        ';
      }
      ?> 
    </li>
  </ul>
</div>