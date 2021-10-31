<?php
class Fibonacci
{
  function print($number) {
    $hogehoge = null;
    $first = 0;
    $second = 0;
    for ($i = 1; $i <= $number; $i++) {
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
  }
}

(new Fibonacci())->print(10);
