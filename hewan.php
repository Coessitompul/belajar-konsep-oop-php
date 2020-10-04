<?php 

require_once 'robot.php';

class robotHewan extends robot {

  public function getKekuatan() {
    echo "saya hewan laut bisa berenang denganjauh...";
  }
  
  public function getSuara() {
    return "Suaranya robot hewan adalah " . $this->suara;
  }

}

?>