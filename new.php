<?php
ob_start();
include "static/header.php";
include "server/post/Create.php";

if (
  $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['task-name'])
  && isset($_POST['task-description']) && isset($_POST['task-date'])
) {
  $create = new Create($_POST['task-name'], $_POST['task-description'], $_POST['task-date']);
  $create->createNewTask();
  header("Location: /", true);
}
?>
<h1 class="title">Create new task</h1>
<form class="add-form" class="list" action="" method="post">
  <label for="task-name">Task name</label>
  <input required type="text" name="task-name">

  <label for="task-description">Task description</label>
  <textarea required type="text" name="task-description"></textarea>

  <label for="task-date">Task data</label>
  <input required type="date" name="task-date" id="">

  <button class="new-task">Add</button>
</form>
<a href="/"><button class="new-task">Voltar</button></a>
<?php include "./static/footer.php"; ?>