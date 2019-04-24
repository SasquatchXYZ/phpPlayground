<?php
  // Inheriting and Extending a Class ----------------------------------------------------------------------------------
  $object = new Subscriber;
  $object->name = "Fred";
  $object->password = "pword";
  $object->phone = "012 345 6789";
  $object->email = "fred@bloggs.com";
  $object->display();
  echo "<hr>";

  class User
  {
    public $name, $password;

    function save_user()
    {
      echo "Save User Code Goes Here...";
    }
  }

  class Subscriber extends User
  {
    public $phone, $email;

    function display()
    {
      echo "Name:   " . $this->name . "<br>";
      echo "Pass:   " . $this->password . "<br>";
      echo "Phone:  " . $this->phone . "<br>";
      echo "Email:  " . $this->email;
    }
  }

  // Overriding a Method and Using the Parent Operator -----------------------------------------------------------------
$object = new Son;
  $object->test();
  $object->test2();

  class Dad
  {
    function test()
    {
      echo "[Class Dad] I am your Father <br>";
    }
  }

  class Son extends Dad
  {
    function test()
    {
      echo "[Class Son] I am Luke <br>";
    }

    function test2()
    {
      parent::test();
    }
  }

  // Calling the Parent Class Constructor
$object = new Tiger();

  echo "Tigers have... <br>";
  echo "Fur: " . $object->fur . "<br>";
  echo "Stripes: " . $object->stripes;

  class Wildcat
  {
    public $fur; // Wildcats have fun

    function __construct()
    {
      $this->fur = "TRUE";
    }
  }

  class Tiger extends Wildcat
  {
    public $stripes; // Tigers have stripes

    function __construct()
    {
      parent::__construct(); // Call parent constructor first
      $this->stripes = "TRUE";
    }
  }