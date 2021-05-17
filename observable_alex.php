<?php
abstract class Observable {

  private $observers = array();

  public function addObserver(Observer $observer) {
         array_push($this->observers, $observer);
  }

  public function notifyObservers() {
         for ($i = 0; $i < count($this->observers); $i++) {
                 $widget = $this->observers[$i];
                 $widget->update($this);
         }
     }
}


class DataSource extends Observable {

  private $names;
  private $prices;
  private $years;
  private $tipus_instrument;
  private $es_nou;

  function __construct() {
         $this->names = array();
         $this->prices = array();
         $this->years = array();
         $this->tipus_instrument = array();
         $this->es_nou = array();
  }

  public function addRecord($name, $price, $year, $tipus_instrument, $es_nou) {
         array_push($this->names, $name);
         array_push($this->prices, $price);
         array_push($this->years, $year);
         array_push($this->tipus_instrument, $tipus_instrument);
         array_push($this->es_nou, $es_nou);
         $this->notifyObservers();
  }

  public function getData() {
         return array($this->names, $this->prices, $this->years, $this->tipus_instrument, $this->es_nou);
  }
}
?>