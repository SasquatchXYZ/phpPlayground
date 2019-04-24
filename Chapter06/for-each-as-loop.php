<?php
  // Numerical Array
  $paper = array("Copier", "Inkjet", "Laser", "Photo");
  $j = 0;

  foreach ($paper as $item) {
    echo "$j: $item<br>";
    ++$j;
  }

  echo "<hr>";
  // Associative Array
  $paper2 = array('copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper");

  foreach ($paper2 as $item => $description) {
    echo "$item: $description<br>";
  }

  echo "<hr>";
  // Using Each and List
  $paper3 = array('copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper");

  while (list($item, $description) = each($paper3)) {
    echo "$item: $description<br>";
  }

  echo "<hr>";
  // Using the List Function
  list($a, $b) = array('Alice', 'Bob');
  echo "a=$a b=$b";