<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class BasicWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=5 bgcolor=#cccccc>
                        <b>Instrument Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $names = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $tipus_instrument = $this->internalData[3];
                $es_nou = $this->internalData[4];
                $html .=  "<tr><td>$names[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td><td>$tipus_instrument[$i]</td><td>$es_nou[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=5 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td><td><b>tipus de instrument</b>
                </td><td><b>Es un article nou?</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $names = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $tipus_instrument = $this->internalData[3];
                $es_nou = $this->internalData[4];
                $html .= 
                "<tr><td>$names[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td><td>$tipus_instrument[$i]
                        </td><td>$es_nou[$i]
                        </td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>