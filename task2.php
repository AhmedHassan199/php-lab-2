<?php
$numbers=array(12 , 45 , 10 , 25) ;
$sumArray = function  ($ar){
    $sum = 0 ;
    foreach($ar as $item){
      $sum += $item ;
    }
    echo  " sum of array =  $sum" ; 
    echo "<br>" ;
    echo   "avg of array =" .$sum/(count($ar));
  } ;
  $sumArray($numbers) ;
  echo "<br>" ;
echo " <h1> sorting ascending order </h1> ";
   sort($numbers);
   var_dump($numbers);
echo "<br>";
   for($x = 0; $x < count($numbers); $x++) {
    echo $numbers[$x];
    echo "<br>";

}

    echo "<br>";
    echo " <h1> sorting descending order </h1> ";
    rsort($numbers);
    var_dump($numbers);
    echo "<br>";
    foreach ($numbers as $value) {
        echo  $value ;
        echo "<br>";

      }

?>