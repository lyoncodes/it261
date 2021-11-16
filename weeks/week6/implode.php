<?php 
$wines = array(
  'cab',
  'pinotnoir',
  'pinotgris',
  'syrah',
  'merlot'
);

$my_wines = implode(', ', $wines);
echo $my_wines;