<?php
// $current_date = date("H:i");

// if(isset($current_date)) {
//   echo date("H:i");
// } else {
//   echo 'It may be wise to seek shelter.';
// }

// _GET, _POST, _PUT,  _PATCH, _DELETE

// set it if ye can GET it
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
};

// switch cases
switch($today) {
  case 'Tuesday' : 
  $html = '<h2>Tuesday Transport Security Layer</h2>';
  $img = 'western.png';
  $content = 'I\'ve learned that there are public keys, and there are private keys. The key is a bit map that guides the cipher in encrypting the bits. A plain text file that says "BANK ACCOUNT" converts to ASCII: 66 97 110 107 32 65 99 99 111 117 110 116. Using a Stack, those numbers could be added to a list, then converted to base-2. The bits are then mapped according to the cipher. The encryption has to decipherable, which calls for a patterned approach. And boy are there are patterns. XOR is the root pattern I\'m trying to fasten down. Man that Alan fella was far ahead.';
  $color = '#536698';
  break;
  
  case 'Wednesday' : 
  $html = '<h2>Wednesday Web Services</h2>';
  $img = 'bezos.jpeg';
  $content = 'I am actively seeking people that maintain servers. I want to meet them. These days, I scale everything on AWS. It seems like the black maw of inevitability. But things like the Serverless framework, Cloudfront CDN, S3, yadayadayada are just too powerful not to utilize. They are wicked from the cli and all-too-easy to program with shell scripting. Talk about remote work...';
  $color = '#536444';

  break;
  
  case 'Thursday' : 
  $html = '<h2>Thursday ...Thinking</h2>';
  $img = 'spa_2.jpeg';
  $content = 'Sometimes it\'s good to sit in a spa and think about computers.';
  $color = '#523698';

  break;
  
  case 'Friday' : 
  $html = '<h2>Framework Fridays</h2>';
  $img = 'vue.png';
  $content = 'Vue.js is my favorite front-end framework. I love the component-based MVC architecture, vue-router, prop/model directives, and lifecycle events. Lists, Stacks, and Queues are built-in to this architecture, making it easy-peasy to render big, broad fetches with high efficiency. Why, those are some gorgeously crafted russian dolls you have there.';
  $color = '#006698';
  break;
  
  case 'Saturday' : 
  $html = '<h2>Saturday SPAs</h2>';
  $img = 'serverless.png';
  $content = 'I\'ve been working towards the JAM stack for awhile. I\'m starting to get it wrangled and there\'s gold in them hills. Build CRUD ops. Feed a db. Build an endpoint with Lambda. Send JSON to the endpoint. Deploy a front-end that fetches the endpoint. Render the nodes. Wah lah. Works with everything big or small. Big data on the endpoint? Small data on the endpoint? All good. Vanilla with Express? React? Vue? Typsecrpt. All good! Deploy from a mono repo or keep things separate--accomodates both. Dare I say...the best way to web dev in 2021? 😱';
  $color = '#00098';
  break;
  
  case 'Sunday' : 
  $html = '<h2>Sunday Schoolwork</h2>';
  $img = 'watch.jpeg';
  $content = 'Turn in all the stuff! Get the points! Get a certificate! Go to the dentist!';
  $color = '#536308';
  break;

  case 'Monday' : 
  $html = '<h2>Monday Memos</h2>';
  $img = 'pickles.png';
  $content = 'Double rainbow. What does it mean? It means that it simply has a place to look for answers before it goes about finding them again. If the answer is already in that place [], there\'s no need to run around again. Things fall. The earth is round. The sun is the center. And memoization is how computers grow complex.';
  $color = '#532343';
  break;
};
?>
<?php include 'config.php';?>
<?php include 'includes/header.php';?>
<section>
  <div>
    <ul class="embed-list">
      <li>
        <a href="daily.php?today=Tuesday">Tuesday</a>
      </li>
      <li>
        <a href="daily.php?today=Wednesday">Wednesday</a>
      </li>
      <li>
        <a href="daily.php?today=Thursday">Thursday</a>
      </li>
      <li>
        <a href="daily.php?today=Friday">Friday</a>
      </li>
      <li>
        <a href="daily.php?today=Saturday">Saturday</a>
      </li>
      <li>
        <a href="daily.php?today=Sunday">Sunday</a>
      </li>
      <li>
        <a href="daily.php?today=Monday">Monday</a>
      </li>
    </ul>
  </div>
</section>
<div class="col-12">
  <?php echo '<h1>'.$html.'</h1>'; ?>
  <div class="col-6 img-container">
    <img src='../assets/images/<?php echo $img; ?>' alt="<?php echo $html; ?>"></img>
  </div>
  <div class="col-6">
    <?php echo '<p class="text-left">'.$content.'</p>'; ?>
  </div>
</div>
  <footer>
    <div class="col-12">
      <ul class="embed-list">
        <li><a href="http://validator.w3.org/check?uri=referer">HTML Validation</a></li>
        <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>