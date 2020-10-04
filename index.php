<?php 
  
  // require_once 'robot.php'; 
  // require_once 'hewan.php';
  // require_once 'orang.php';

// autoload class ini adalah cara mudah supaya tidakk perlu lagi menggunakan require_once() secara berulang-ulang ketika memanggil class.
spl_autoload_register(function ($class_name) {
  include "foldername/" . $class_name . '.php';
});

  $robot1 = new robot('testing', 10);
  
  $robot1->setSuara('hoak hoak')->setBerat(50);  

  echo $robot1->getSuara() . " - " . $robot1->getBerat();

?>