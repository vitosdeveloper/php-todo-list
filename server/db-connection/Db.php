<?php
include "config.php";

class Db
{
  private $conn;
  protected function __construct()
  {
    try {
      $this->conn = new mysqli(hostname, username, password, database);
    } catch (\Throwable $th) {
      echo $th;
    }
  }

  protected function getConnection()
  {
    return $this->conn;
  }

  protected function disconnectDb()
  {
    $this->conn->close();
  }
}
