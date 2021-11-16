<?php

$str = "I'm currently reading The Looming Tower";
$sub = substr($str, 0);

echo $str;
echo '<br>';

echo $sub;
echo '<br>';

echo substr($str, 0, 4);
echo '<br>';

echo substr($str, 0, 14);
echo '<br>';

echo substr($str, -7);
echo '<br>';

echo substr($str, -15, 5);
echo '<br>';

//

$str2 = 'Hulu\'s rendition of the Looming Tower is based on the book, the Looming Tower.';

echo str_replace('the', 'The', $str2);
