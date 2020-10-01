<?php 

  // class
  class robot {
    
    // property
    public $suara;
    public $berat;

    // metode set && get
    public function setSuara($suara) {
      $this->suara = $suara;
    }

    public function getSuara() {
      return $this->suara;
    }

    public function setBerat($berat) {
      $this->berat = $berat;
    }

    public function getBerat() {
      return $this->berat;
    }

  }

  $robot1 = new robot;
  $robot2 = new robot;
  
  // set digunakan untuk men-set suara 'ngik ngik ngok' ke dalam property suara yang ada di dalam class robot.
  $robot1->setSuara('ngik ngik ngok');
  // get digunakan untuk mengambil data dari dalam property yang berada didalam class robot, jadi ketika nilainya sudah di set maka akan langsung diambil nilainya, sesuai dengan program yang ditulis didalam function getSuara()
  echo "Suara robotnya adalah " . $robot1->getSuara();

  $robot2->setSuara('tereng tereng teng');
  echo "Suara robotnya adalah " . $robot2->getSuara();

  $robot1 = new robot;
  $robot2 = new robot;
    
  $robot1->setBerat(50);
  echo "Berat robotnya adalah " . $robot1->getBerat();

  $robot2->setBerat(100);
  echo "Berat robotnya adalah " . $robot2->getBerat();


?>