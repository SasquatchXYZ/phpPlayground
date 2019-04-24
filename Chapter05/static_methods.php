<?php
  // Static Method
  User::pwd_string();
  echo "<hr>";

  class User
  {
    static function pwd_string()
    {
      echo "Please Enter Your Password";
    }
  }

  // Static Properties
  $temp = new Test();

  echo "Test A: " . Test::$static_property . "<br>";
  echo "Test B: " . $temp->get_sp() . "<br>";
  echo "Test C: " . $temp->static_property . "<br>";

  class Test
  {
    static $static_property = "I'm static";

    function get_sp()
    {
      return self::$static_property;
    }
  }