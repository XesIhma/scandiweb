<?php

use App\Classes\Dvd;
use App\Classes\Book;
use App\Classes\Furniture;
use App\Classes\View;

use App\Data\Database;
require_once realpath("../vendor/autoload.php");
require_once '../src/functions/helpers.php';


$request = formatUrl($_SERVER['REQUEST_URI']);
echo $request;
if ($request == '/mass-delete'){
  if (!($_SERVER['REQUEST_METHOD'] === 'POST')) {
    echo 'You must specify a POST request';

  }
  if (!(isset($_POST['indexes']))) {
    echo " indexes are required";
  }
  $indexesArray = $_POST['indexes'];
    echo $indexesArray;

}

try {
  $db = new Database();
}catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
$db->insertRow(array('<b>BK12503</b>', 'Czarujący ogród', 30, '300g'));

$p1 = new Dvd("DV00100", "płyta", 100, "100MB");
$p2 = new Dvd("DV00101", "płyta", 100, "700MB");
$p3 = new Dvd("DV00102", "płyta", 100, "200MB");
$p4 = new Furniture("FF00101", "biurko", 1100, "20 x 50x 120");
$p5 = new Furniture("BK59320", "The Lord of the Rings: The Twin Towers", 70, "500g");

$productsView = new View("products");



$productsList = [$p1, $p2, $p3, $p4, $p5];

try {
  $productsView->render($productsList);
}catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>

