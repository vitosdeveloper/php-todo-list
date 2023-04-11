<?php
include "server/db-connection/Db.php";

class Read extends Db
{
  public function __construct()
  {
    Db::__construct();
  }
  public function getTasks()
  {
    try {
      $db = $this->getConnection();
      $query = "SELECT * from tasks";
      $result = $db->query($query);
      $tasks = [];
      while ($res = $result->fetch_assoc()) {
        $tasks[] = $res;
      }
      $this->disconnectDb();
      return $tasks;
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
