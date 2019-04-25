<?php
  // Precision Setting -------------------------------------------------------------------------------------------------
  echo "<pre>"; // Enables viewing of the spaces

// Pad to 15 spaces
  printf("The result is $%15f\n", 123.42 / 12);

// Pad to 15 spaces, fill with zeros
  printf("The result is $%015f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision
  printf("The result is $%15.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with zeros
  printf("The result is $%015.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
  printf("The result is $%'#15.2f\n", 123.42 / 12);

  echo "<hr>";

  // String Padding ----------------------------------------------------------------------------------------------------
$h = 'Rasmus';

printf("[%s]\n", $h); // Standard String Output
printf("[%12s]\n", $h); // Right justify with spaces to width 12
printf("[%-12s]\n", $h); // Left justify with spaces
printf("[%012s]\n", $h); // Pad with zeros
printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'

$d = 'Rasmus Lerdorf';

printf("[%12.8s]\n", $d); // Right justify, cutoff to 8 characters
printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // left justify, pad with '@', cutoff 10 chars