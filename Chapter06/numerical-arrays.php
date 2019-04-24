<?php
  $paper[] = "Copier";
  $paper[] = "Inkjet";
  $paper[] = "Laser";
  $paper[] = "Photo";

  // or using Explicit Notation
  /*$paper[0] = "Copier";
  $paper[1] = "Inkjet";
  $paper[2] = "Laser";
  $paper[3] = "Photo";*/

//  print_r($paper);
  for ($k = 0; $k < 4; ++$k) {
    echo "$k: $paper[$k]<br>";
  }