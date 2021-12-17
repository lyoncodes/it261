<?php
include('../final/config.php');
$sql = 'SELECT * FROM Ballpark';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
?>
<div class="mt-5">
  <ul>
    <li>
      <?php
      while($row = mysqli_fetch_assoc($result)) {
        echo '
          <div>
            <h1>'.$row['ballpark_name'].'</h1>
            <h2>'.$row['ballpark_address'].'</h2>
            <div>
              <ul>
                <li>
                  <h3>Ballpark Capacity: '.$row['ballpark_capacity'].'</h3>
                </li>
                <li> 
                  <a href="">Vendor Stalls: '.$row['ballpark_vendor_capacity'].'</a>
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