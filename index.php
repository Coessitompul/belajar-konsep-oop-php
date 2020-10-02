<?php 
  
  require_once 'robot.php'; 

  $robot1 = new robot('ngik ngik ngok', 50);
  $robot2 = new robot('ngik ngik ngok ngok', 100);
  
  // set digunakan untuk men-set suara 'ngik ngik ngok' ke dalam property suara yang ada di dalam class robot.

  // get digunakan untuk mengambil data dari dalam property yang berada didalam class robot, jadi ketika nilainya sudah di set maka akan langsung diambil nilainya, sesuai dengan program yang ditulis didalam function getSuara()  
  $robot1->setBerat(30);
  echo "Suara robotnya adalah " . $robot1->getSuara() . " " . "dengan berat robot " . $robot1->getBerat() . "<br>";
  echo "Suara robotnya adalah " . $robot2->getSuara() . " " . "dengan berat robot " . $robot2->getBerat() . "<br>";

  // $robot1 = new robot(100);
  // $robot2 = new robot(100);
    
  // $robot1->setBerat(50);
  // echo "Berat robotnya adalah " . $robot1->getBerat() . "<br>";

  // $robot2->setBerat(100);
  // echo "Berat robotnya adalah " . $robot2->getBerat();


?>