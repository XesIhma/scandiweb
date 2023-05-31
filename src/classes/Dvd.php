<?php
namespace App\Classes;

class Dvd extends Product{
  private $size;

  public function __construct($sku, $name, $price, $size){
    parent::__construct($sku, $name, $price);
    $this->size = $size;
  }
  public function getProductSpecificAttr(){
    return "Size: ". $this->size;
  }

}