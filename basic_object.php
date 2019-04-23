<?php
  $object = new User;
  print_r($object);
  echo "<br>";

  $object->name = "Dalton";
  $object->password = "MyP@ssword108";
  print_r($object);
  echo "<br>";

  $object->save_user();

  class User
  {
    public $name, $password;

    function save_user()
    {
      echo "Save User code goes here...";
    }
  }