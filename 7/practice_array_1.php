<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Type all elements in h3 dynamically</h1>
  <?php
    $colors = ["red", "green", "blue", "white", "orange", "black", "yellow"];
    $i = 0;
    $arr_count = count($colors);
  ?>

  <h3> - <?=$colors[$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>
  <h3> - <?=$colors[++$i]?> </h3>

  <h1>Remove last element in array dynamically without built in functions</h1>
  <?php
    unset($colors[$arr_count - 1]);
    $j = 0;
  ?>
  <h3> - <?=$colors[$j]?> </h3>
  <h3> - <?=$colors[++$j]?> </h3>
  <h3> - <?=$colors[++$j]?> </h3>
  <h3> - <?=$colors[++$j]?> </h3>
  <h3> - <?=$colors[++$j]?> </h3>
  <h3> - <?=$colors[++$j]?> </h3>
  <!-- error because there is no element in index 6 -->
  <h3> - <?=$colors[++$j]?> </h3>

</body>
</html>