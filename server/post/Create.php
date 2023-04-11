<?php
include "server/db-connection/Db.php";

class Create extends Db
{
  private $taskName;
  private $taskDescription;
  private $taskDate;
  public function __construct($taskName, $taskDescription, $taskDate)
  {
    Db::__construct();
    $this->taskName = $taskName;
    $this->taskDescription = $taskDescription;
    $this->taskDate = $taskDate;
  }

  public function createNewTask()
  {
    $db = $this->getConnection();
    $query = "INSERT INTO `tasks` (`id`, `task-name`, `task-description`, `task-date`) 
    VALUES (NULL, '" . $this->taskName . "', '" . $this->taskDescription . "', '" . $this->taskDate . "');";
    $db->query($query);
    $this->disconnectDb();
  }
}
