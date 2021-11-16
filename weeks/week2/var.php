<?php
// variables: named references to data types, like Strings and Integers
$name = 'Michael';
$name .= ' Lyon';
$age = 30;
$mission_statement = 'program';

// template html and populate it with variables
$template = 
'<div>
<h1>'.$name.'</h1>
<p> is: '.$age.'</p>
<p> he likes to: '.$mission_statement.'</p>
</div>';

// for maths
$price = 5.65;
$tax_rate = 0.09;

// do work
$tax = $price * $tax_rate;
$tax += $price;
// call the built-in number_format()
$total = number_format($tax, 2);


// ================== //
// array declaration
$fruit[] = 'orange';
$fruit[] = 'peach';
$fruit[] = 'pear';
$fruit[] = 'lemon';
$fruit[] = 'grapes';

$fruit = array(
  'orange',
  'peach',
  'pear',
  'lemon',
  'grapes'
);

$fruit = [
  'orange',
  'peach',
  'pear',
  'lemon',
  'grapes'
];

// template calculated fields and dates
$vendor_msg = 'Your Total at Checkout:';

$transaction_template =
'<div>
  <h2>'.$vendor_msg.'</h2>
  <h2>$'.$total.'</h2>
  <p>'.date('l \, F Y h:i:s A').'</p>
</div>';

echo $template;
echo $transaction_template;

// output arrays. the echo command cannot output Arrays
print_r($fruit);
echo('<br>');
var_dump($fruit);
echo('<br>');


// Build an hard-coded nav why don't ya
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

$nav = array(
  'index.php' => 'Home',
  'about.php' => 'About',
  'daily.php' => 'Daily',
  'contact.php' => 'Contact',
  'gallery.php' => 'Gallery',
);

// <pre> tags
echo '<pre>';
var_dump($nav);
echo '</pre>';

