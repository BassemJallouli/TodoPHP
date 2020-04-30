<?php

$todos = [];
if (file_exists('todo.json')){
   $json = file_get_contents('todo.json');
   $todos = json_decode($json); 
}

?> 

<!doctype html>
<html lang="en">
 <head>
  <title>Todo App</title>
 </head>
 <body>
 <h1>Todo App</h1>
 <form action="newTodo.php" method="post">
    <input type="text" name="Todo task" placeholder="Add your todo">
    <button> Add todo</button>
 </form>
 </body>
</html>

<?php foreach ($todos as $todoName => $todo) : ?>
   <div style="margin-bottom: 20px;">
      <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?>>
      <?php echo $todoName ?>
      <button> Delete </button>

   </div>
<?php endforeach; ?>

}