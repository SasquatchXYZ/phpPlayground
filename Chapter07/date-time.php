<?php
  echo time();
  echo "<br>";

  echo time() + 7 * 24 * 60 * 60;
  echo "<br>";

  echo mktime(0, 0, 0, 1, 1, 2000);
  echo "<br>";

  echo date("l F jS, Y - g:ia", time());
  echo "<br>";

  $month = 9;     // September
  $day = 31;      // 31st
  $year = 2022;   // 2022

  if (checkdate($month, $day, $year)) echo "Date is valid";
  else echo "Date is invalid";