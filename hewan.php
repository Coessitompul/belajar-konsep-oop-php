<?php 

require_once 'robot.php';

class robotHewan extends robot {

  public function getKekuatan() {
    echo "saya hewan laut bisa berenang denganjauh...";
  }
  
  public function getSuara() {
    return "Suaranya robot hewan adalah " . $this->suara;
  }

  public function testing() {
    // self::getSuara(); berfungsi untuk memanggil fungsi yang ada pada dirinya sendiri, cara hal ini seperti ini lebih baik digunakan, karena akan menjadi sebuah penanda juga bahwa fungsi itu diambil dari class itu sendiri, hal ini sangat bermanfaat ketika nama fungsi di parent class dan child class sama. self bisa juga digantikan dengan $this. tetapi sebaiknya menggukan self::
    // return self::getSuara();
    // parent::getSuara(); berfungsi untuk memanggil fungsi yang berada pada parent class, dalam hal ini class robot.
    return parent::getSuara();
  }

}

?>