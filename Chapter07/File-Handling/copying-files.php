<?php
//  copy('testfile.txt', 'testfile2.txt') or die("Could not copy file...");
//  echo "File successfully copied to 'testfile2.txt";

  // Alternative Syntax for Copying
  if (!copy('testfile.txt', 'testfile2.txt')) echo 'Could not copy file';
  else echo "File successfully copied to 'testfile2.txt";