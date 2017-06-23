<?php

$sql = 'SELECT * FROM accounts';
foreach ($conn->query($sql) as $row) {
  print $row['name'] . "\t";
}
