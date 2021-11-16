<?php
  echo date("l jS \of F Y h:i:s A");
  echo '<br>';
  echo date("H:i");
  echo '<br>';
  date_default_timezone_set('America/Los_Angeles');
  echo date("H:i");
  echo '<br>';

  $current_date = date("H:i");
  if($current_date <= 11) {
    echo '<h1>good morning</h1>';
  } elseif ($current_date <= 16) {
    echo '<h1>good afternoon 🤡</h1>';
  } else {
    echo '<h1>good evening 🤡</h1>';
  }