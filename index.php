<?php 
  
  require_once 'robot.php'; 
  require_once 'hewan.php';
  require_once 'orang.php';

  // cara pemanggilan public static function bersuara
  // yang pertama adalah nama classnya kemudian dua titik dua (::) yang merupakan cara untuk memanggil public static function bersuara, kemudian didepan (::) kita panggil nama metode yang ingin kita gunakan yang ada didalam class orang.
  echo orang::$suara;

  // selain untuk fungsi kita juga bisa menggunakannya untuk property
  

?>