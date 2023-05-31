<?php
namespace App\Classes;

class Furniture extends Product{
  private $dimensions;

  public function __construct($sku, $name, $price, $dimensions){
    parent::__construct($sku, $name, $price);
    $this->dimensions = $dimensions;
  }
  public function getProductSpecificAttr(){
    return "Dimensions: " . $this->dimensions;
  }

}