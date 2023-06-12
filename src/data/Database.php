<?php
namespace App\Data;

class Database {
  private $host = "localhost"; 
  private $username = "root"; 
  private $password = ""; 
  private $db = "products";
  private $connection;

  public function __construct() {
    $this->connection = new \mysqli($this->host, $this->username, $this->password, $this->db);
    if ($this->connection->connect_error) {
      $this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
    }
    echo "Created DB connection";
  }

  private function executeQuery($sql){
    return $this->connection->query($sql);
  }

  public function insertRow($data){
    foreach($data as $value){
      $value = htmlentities($value, ENT_QUOTES, 'UTF-8');
      $value = $this->connection->real_escape_string($value);
    }


    $sql = "INSERT INTO items (sku, name, price, spec_attr) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";

    if($this->executeQuery($sql)) echo "sukces";
    else echo "porażka";
  }









}