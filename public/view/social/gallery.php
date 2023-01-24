<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

   
</head>
<body>
<h1>Gallery</h1>

<?php

foreach ($newKey as $key => $value) :?>
<?=$key ?>
<br>
<?php print_r($value) ?>
<br>

<?php endforeach ?>

</body>
</html>