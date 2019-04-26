<?php
  echo "<pre>"; // Enables display of line feeds
  echo file_get_contents("testfile.txt");
  echo "</pre>"; // Terminates <pre> tag

  echo "<hr>";

  echo file_get_contents("http://oreilly.com");