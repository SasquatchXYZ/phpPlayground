<?php
  $object1 = new User2();
  $object1->name = "Alice";
  $object2 = clone $object1;
  $object2->name = "Amy";

  echo "object1 name = $object1->name <hr>";
  echo "object2 name = " . $object2->name;


  class User2
  {
    public $name;
  }