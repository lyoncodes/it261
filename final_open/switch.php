<?php
include '../final/config.php';
include '../final/includes/header.php';

// set it if ye can GET it
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
};

// switch cases
switch($today) {
  case 'Tuesday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=1';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result);
  $html = 'Tuesday';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#536698';
  break;
  
  case 'Wednesday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=2';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result);
  $html = 'Wednesday';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#536444';
  break;
  
  case 'Thursday' : 
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=3';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result);
  $html = 'Thursday';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#523698';
  break;
  
  case 'Friday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=4';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result); 
  $html = 'Fridays';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#006698';
  break;
  
  case 'Saturday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=5';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result);
  $html = 'Fridays';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = str_replace(' ', '', $title).'.png';
  $color = '#00098';
  break;
  
  case 'Sunday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=6';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result); 
  $html = '<h2>Sunday Schoolwork</h2>';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#536308';
  break;

  case 'Monday' :
  $sql = 'SELECT * FROM Team JOIN City ON Team.city_id=City.city_id LEFT OUTER JOIN Ballpark ON Team.team_id=Ballpark.team_id WHERE Team.team_id=7';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
  $content = mysqli_fetch_assoc($result); 
  $html = '<h2>Monday Memos</h2>';
  $title = $content['team_name'];
  $text = $content['city_name'];
  $stadium = $content['ballpark_name'];
  $img = $title.'.png';
  $color = '#532343';
  break;
};
?>
<section>
  <div>
    <ul class="embed-list">
      <li>
        <a href="switch.php?today=Tuesday">Tuesday</a>
      </li>
      <li>
        <a href="switch.php?today=Wednesday">Wednesday</a>
      </li>
      <li>
        <a href="switch.php?today=Thursday">Thursday</a>
      </li>
      <li>
        <a href="switch.php?today=Friday">Friday</a>
      </li>
      <li>
        <a href="switch.php?today=Saturday">Saturday</a>
      </li>
      <li>
        <a href="switch.php?today=Sunday">Sunday</a>
      </li>
      <li>
        <a href="switch.php?today=Monday">Monday</a>
      </li>
    </ul>
  </div>
</section>
<div class="col-12">
  <?php echo
  '<h1>'.$text.' '.$title.'</h1>'
  ;
  ?>
  <div class="col-6 img-container">
    <img src='../assets/images/<?php echo $img; ?>' alt="<?php echo $html; ?>"></img>
  </div>
  <div class="col-6">
    <?php echo '<p class="text-left"> The '.$title.' play in '.$stadium.' located in beautiful '.$text.'</p>'; ?>
  </div>
</div>
</body>
</html>