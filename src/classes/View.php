<?php

namespace App\Classes;
class View {
  private $filePath;
  private $content;

  public function __construct($filePath) {
    $this->filePath = dirname(__FILE__)."/../views/".$filePath.".html";
    $this->content = '';
  }

  public function render($data) {
    //extract($data);

    if (!is_file($this->filePath)) {
      throw new \Exception("View file not found: " . $this->filePath);
    }

    $this->content = file_get_contents($this->filePath);

    

    $offset = mb_stripos($this->content, '@extends');
    if ($offset) $this->wrapContent($offset);

    // echo $this->content;  

    $offset = mb_stripos($this->content, '@items');
    if ($offset) $this->prepareItems($data);

    echo $this->content;
  }


  private function wrapContent($offset){
    $wrapperStart = $offset + 12;
    $wrapperEnd = mb_stripos($this->content, ' )', $wrapperStart) +2;
    $length = $wrapperEnd - $wrapperStart;

    $wrapperPath = substr($this->content, $wrapperStart, $length);
    $this->content = str_replace('@extends( '. $wrapperPath . ' )', '', $this->content);
    $wrapperPath = dirname(__FILE__)."/../views/".$wrapperPath.".html";
    if (!is_file($wrapperPath)) {
      throw new \Exception("Template file not found: " . $wrapperPath);
    }
    
    $wrapper = file_get_contents($wrapperPath);
    $this->content = str_replace('@content', $this->content, $wrapper); 
    
  }

  private function prepareItems($data){
    $this->content = str_replace('@items', '', $this->content);

    $productsListText = 'products: [';
    foreach($data as $item){
      $productsListText .= '{';
      $productsListText .= 'sku: "' . $item->getSku() . '",';
      $productsListText .= 'name: "' . $item->getName() . '",';
      $productsListText .= 'price: "' . $item->getPrice() . '",';
      $productsListText .= 'prodSpecificAttr: "' . $item->getProductSpecificAttr().'"';
      $productsListText .= "},\n";
    }
    $productsListText .= ']';

    $this->content = str_replace('products: [ ]', $productsListText, $this->content);

    

  }

}

?>