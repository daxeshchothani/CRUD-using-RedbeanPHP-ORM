<?php
include './connectionDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURD Using ORM</title>
</head>

<body>
  <!-- for create beam dispense
  for update load nd id 
  for delete trash  -->
  <?php

  $compny = R::load('tblcompny', 7);
  $id = R::trash($compny);
  print 'ID: ' . $id . ' is delete';
  ?>
</body>

</html>