<?php
$questions = array
  (
  array("Q1",'Combien font 1 + 1 ?', 1, 2, 3),
  array("Q2",'Combien font 1 + 2 ?', 1, 2, 3),
  array("Q3",'Combien font 1 + 3 ?', 2, 3, 4),
  array("Q4",'Combien font 1 + 4 ?', 3, 4, 5)
  );
  $randomQ = rand(0,3);
for ($i=2; $i <5 ; $i++) {
  echo $questions[$randomQ];
  echo $questions[$randomQ][$i] . ' ';

}





 ?>
