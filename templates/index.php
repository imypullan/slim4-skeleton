<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Todo</h1>
<div>
    <?php foreach($tasks as $task)
    {
        $id = intval($task['id']);
        echo '<h3>' . $task['task_name'] . '</h3>';
        echo '<form action="/markDone" method="get">
            <input type="checkbox">
            <input type="hidden" name="id" value= '.  $id . '>
            <input type="submit" value="mark as done">
        </form>'
        ?>

    <?php
    }
    ?>
</div>

<div>
    <h2>Add new task</h2>
    <form action="/" method="post">
        <label for="task_name">Task</label>
        <input type="text" name="task_name">
        <input type="submit">
    </form>
</div>

</body>
</html>
