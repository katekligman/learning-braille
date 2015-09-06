<?php

// A letter quiz generator by Kate Kligman
// Creates a quiz with randomized rows and columns of letters.

$letters = $argv[1];
$file = $argv[2];
$rows = $argv[3];
$cols = $argv[4];

if (empty($letters) || empty($file) || empty($cols) || empty($rows)) {
  die("Usage: quiz_letters.php '[letters separated by a space]' [filename] [rows] [cols]\r\n");
}

$letters = explode(' ', $letters);

$fp = fopen($file, 'w');

for ($i = 0; $i < $cols; $i++)  {
  for ($j = 0; $j < $rows; $j++) {
    fwrite($fp, $letters[rand(0, sizeof($letters) - 1)] . ' ');
  }
  fwrite($fp, "\r\n");
}

fclose($fp);

