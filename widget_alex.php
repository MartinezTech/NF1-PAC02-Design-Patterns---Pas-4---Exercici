<?php
require_once("observable_alex.php");
require_once("abstract_widget_alex.php");

$dat = new DataSource();
$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

$dat->addRecord("drum", "$12.95", 1955, "Percussion", "No");
$dat->addRecord("guitar", "$13.95", 2003, "Stringed", "No");
$dat->addRecord("banjo", "$100.95", 1945, "Stringed", "Si");
$dat->addRecord("piano", "$120.95", 1999, "Stringed and percussion", "Si");

$widgetA->draw();
$widgetB->draw();
?>