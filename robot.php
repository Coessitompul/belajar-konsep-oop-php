<?php 


  // class
  class robot {
    
    // public, protected, private


    // property
    private $suara;
    public $berat;

    // constructor
    public function __construct($suara, $berat) {
      $this->suara = $suara;
      $this->berat = $berat;
    }    

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



?>