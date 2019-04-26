<?php
  // Reading from file with fgets
  $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");

  $line = fgets($fh);
  fclose($fh);
  echo $line;

  echo "<hr>";

  // Reading from file with fread
  $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");

  $text = fread($fh, 3);
  fclose($fh);
  echo $text;