<?php 

  // class
  class robot {
    
    // property
    public $suara = "ngik ngik";
    public $berat = 30;

    // metode
    public function bersuara() {
      echo "Suara robot " . $this->suara;
    }

    public function beratRobot() {
      return $this->berat;
      // return disini bertujuan untuk mengembalikan nilai dari nilai berat dari property berat ketika fungsi ini dipanggil
    }

  }

  $robot1 = new robot;
  $robot1->bersuara();
  echo $robot1->beratRobot();



?>