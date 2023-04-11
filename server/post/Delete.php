<?php
class Delete extends Db
{
  public function __construct()
  {
    Db::__construct();
  }
  public function deleteById($id)
  {
    $db = $this->getConnection();
    $query = "DELETE FROM `tasks` WHERE `tasks`.`id`=" . $id;
    $db->query($query);
    $this->disconnectDb();
  }
}
