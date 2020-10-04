<?php 
  
  require_once 'robot.php'; 
  require_once 'hewan.php';

  $robot1 = new robotHewan('ngik ngok', 20);
  // disini menggunakan getSuara() yang ada pada class robotHewan, didalam fungsi geSuaraI() tersebut menggunakan property protected suara.
  echo $robot1->testing(); 


?>