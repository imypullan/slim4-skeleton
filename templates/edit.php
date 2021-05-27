<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Edit task</h1>
</header>
<main>
    <div class="addTask">
        <form class="editForm" action="/editTask" method="post">
            <input type="hidden" name="id" value="<?php echo $task['id']?>">
            <input class="textBox" type="text" name="task_name" value="<?php echo $task['task_name']?>">
            <input type="hidden" name="completed" value="<?php echo $task['completed']?>">
            <input type="submit" class="symbolButton submitButton" value="&#128295;">
        </form>
    </div>
    <div class="linker">
        <script>
            document.write('<h2><a href="' + document.referrer + '">Go back</a></h2>');
        </script>
    </div>
</main>
</body>
</html>
