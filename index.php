<?php
include "static/header.php";
include "server/get/getTasks.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
  echo $_POST['id'];
}
?>
<h1 class="title">Todo List</h1>
<div class="list">
  <?php
  foreach ($tasks as $task) {
    echo "
    <form method='post' action='' class='task' id='" . $task["id"] . "'>
      <p><label>Name: </label>" . $task["task-name"] . "</p>
      <p><label>To do: </label>" . $task["task-description"] . "</p>
      <p><label>Expires: </label>" . $task["task-date"] . "</p>
    </form>
    ";
  }
  ?>
</div>
<a href="./new.php"><button class="new-task">New task</button></a>
<?php include "./static/footer.php"; ?>

<script>
  const tasks = document.querySelectorAll('.list .task');
  if (tasks) {
    tasks.forEach(task => {
      task.addEventListener('dblclick', (e) => {
        const input = document.createElement('input');
        input.style.display = 'none';
        input.value = e.currentTarget.id;
        input.name = 'id';
        e.currentTarget.append(input);
        e.currentTarget.submit();
      });
    });
  }
</script>