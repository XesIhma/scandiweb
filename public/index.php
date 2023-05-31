<?php

use App\Classes\Dvd;
use App\Classes\Book;
use App\Classes\Furniture;
use App\Classes\View;
require_once realpath("../vendor/autoload.php");


$p1 = new Dvd("DV00100", "płyta", 100, "100MB");
$p2 = new Dvd("DV00101", "płyta", 100, "700MB");
$p3 = new Dvd("DV00101", "płyta", 100, "200MB");
$p4 = new Furniture("FF00101", "biurko", 1100, "20 x 50x 120");

$productsView = new View("products");



$productsList = [$p1, $p2, $p3, $p4];

try {
  $productsView->render($productsList);
}catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
