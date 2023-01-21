<?php

$numbers = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
echo  " <h1>ascending order sort by value</h1>" ; 
asort($numbers ); 
var_dump($numbers);
echo "<br>";
foreach ($numbers as $key=> $value) {
     echo  " $key=> $value " ;
    echo "<br>";
  }
  echo  " <h1>ascending order sort by Key</h1>" ; 
  ksort($numbers );
  var_dump($numbers);

  echo "<br>";

  foreach ($numbers as $key=> $value) {
    echo  " $key=> $value " ;
    echo "<br>";
  }
  echo "<hr>" ;

  echo  " <h1>descending order sorting by Value</h1>" ; 
  arsort($numbers );
  var_dump($numbers);

  echo "<br>";

  foreach ($numbers as $key=> $value) {
    echo  " $key=> $value " ;
    echo "<br>";
  }
  echo "<hr>" ;

  echo  " <h1>descending order sorting by Key</h1>" ; 
  krsort($numbers );
  var_dump($numbers);

  echo "<br>";

  foreach ($numbers as $key=> $value) {
    echo  " $key=> $value " ;
    echo "<br>";
  }






?>