<?php
//1.
for ($i=1; $i<10; $i++) {
  for ($n=1; $n < 11; $n++) { 
    var_dump($i*$n . " ");
  }
  var_dump("<br>");
};

//2.

$x = 7;
$y = 21;
for ($i = 1; $y > 0; ++$i) {
  $y-=$x;
  $x*=1.1;
  if ($y <= 0) var_dump($i);
};

//3.
$num = 800;
for ($i=1; $num>=50; $i++) { 
  $num/=2;
  if ($num < 50) var_dump($i);
};

//5
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];
array_multisort($arr);
echo "<br> Массив <br>";
var_dump($arr);
?>
