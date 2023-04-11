<?php include "./static/header.php"; ?>
<h1 class="title">Create new task</h1>
<form class="add-form" class="list" action="./index.php" method="post">
  <label for="task-name">Task name</label>
  <input required type="text" name="task-name">

  <label for="task-description">Task description</label>
  <textarea required type="text" name="task-description"></textarea>

  <label for="task-date">Task data</label>
  <input required type="date" name="task-date" id="">

  <button class="new-task">Add</button>
</form>
<?php include "./static/footer.php"; ?>