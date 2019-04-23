<?php
  // String Functions
  echo strrev(" .dlroW olleH"); // Reverse String
  echo str_repeat("Hip ", 2); // Repeat String
  echo strtoupper("hooray!"); // String to Uppercase
  echo "<hr>";

  // Cleaning up a name ------------------------------------------------------------------------------------------------
  echo fix_names("WILLIAM", "henry", "gatES");
  echo "<hr>";

  function fix_names($n1, $n2, $n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return "$n1 $n2 $n3";
  }

  // Returning multiple values in an array -----------------------------------------------------------------------------
  $names = fix_names2("WILLIAM", "henry", "gatES");
  echo "$names[0] $names[1] $names[2]";
  echo "<hr>";

  function fix_names2($n1, $n2, $n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1, $n2, $n3);
  }

  // Passing Values to a function by reference -------------------------------------------------------------------------
  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";

  echo "$a1 $a2 $a3";
  echo "<hr>";
  fix_names3($a1, $a2, $a3);
  echo "$a1 $a2 $a3";
  echo "<hr>";

  function fix_names3(&$n1, &$n2, &$n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
  }

  // Returning Values in Global Variables ------------------------------------------------------------------------------
  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";

  echo $a1 . " " . $a2 . " " . $a3 . "<br>";
  fix_names4();
  echo $a1 . " " . $a2 . " " . $a3;

  function fix_names4()
  {
    global $a1;
    $a1 = ucfirst(strtolower($a1));
    global $a2;
    $a2 = ucfirst(strtolower($a2));
    global $a3;
    $a3 = ucfirst(strtolower($a3));
  }

?>