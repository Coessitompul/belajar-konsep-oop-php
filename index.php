<?php 
  
  require_once 'robot.php'; 
  require_once 'hewan.php';

  $robot1 = new robot('ngik ngik ngok', 50);
  echo "Suara Robot " . $robot1->getSuara() . " dengan berat " . $robot1->getBerat() . "<br>";

  $robothewan = new robotHewan('hoakhoak', 5);
  echo "Suara robot hewan " . $robothewan->getSuara() . " dan berat " . $robothewan->getBerat() . "<br>";
  // echo $robothewan->getKekuatan();
   echo $robothewan->getSuara();



?>