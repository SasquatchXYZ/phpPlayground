<?php
  // is_array ----------------------------------------------------------------------------------------------------------
  $fred = "name";
//  $fred = array('name');
  echo (is_array($fred)) ? "Is an array" : "Is not an array";

  echo "<hr>";

  // explode -----------------------------------------------------------------------------------------------------------
  $temp = explode(' ', "This is a sentence with seven words.");
  print_r($temp);

  echo "<hr>";

  $temp2 = explode('***', "A***sentence***with***asterisks.");
  print_r($temp2);

  echo "<hr>";
  // compact -----------------------------------------------------------------------------------------------------------
  $fname = "Doctor";
  $sname = "Who";
  $planet = "Gallifrey";
  $system = "Gridlock";
  $constellation = "Kasterborous";

  $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

  print_r($contact);

  echo "<hr>";

  // Compact for debugging ---------------------------------------------------------------------------------------------
  $j = 23;
  $temp3 = "Hello";
  $address = "1 Old Street";
  $age = 61;

  print_r(compact(explode(' ', 'j temp3 address age')));