<?php
define('NUM', 10);

$first = 0;
$second = 0;
for ($i = 1; $i <= NUM; $i++) {
  if ($i === 1) {
    echo "1\n";
    $first = 1;
    continue;
  } elseif ($i === 2) {
    echo "1\n";
    $second = 1;
    continue;
  }

  $now = $first + $second;
  echo $now."\n";
  $first = $second;
  $second = $now;
}