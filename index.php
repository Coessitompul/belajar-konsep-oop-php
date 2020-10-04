<?php 
  
  require_once 'robot.php'; 
  require_once 'hewan.php';
  require_once 'orang.php';

  $robot1 = new robot('testing', 10);
  // penggunaan method chaining, penggunaan method chaining mengharuskan kita membuat fungsi yang harus mereturn this pada fungsinya. contoh dalam hal ini adalah fugsi setSuara(). jadi setSuara() harus mengembalikan nilai $this pada fungsinya, itu bertujuan supaya method yang disambungkan di belakangnya tidak mempunyai masalah, 
  // supaya lebih jelas, return $this digunakan, supaya ketika fungsi itu dipanggil, maka dia mengembalikan nilai thisnya atau dalam conteks ini adalah robot, sehingga di setBerat() nilai yang sudah dipakai adalah robot. jika tidak demikian maka program akan error.
  // setiap method yang akan dibelakangnya akan di chaining maka harus mengembalikan nilai this, atau mereturn nilai $this.
  $robot1->setSuara('hoak hoak')->setBerat(50);  

  echo $robot1->getSuara() . " - " . $robot1->getBerat();

?>