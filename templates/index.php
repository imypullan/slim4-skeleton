<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<h1>Todo</h1>
<div>
    <?php foreach($tasks as $task)
    {
        echo '<h3>' . $task['task_name'] . '</h3>';
        echo 'Mark as done';
    } ?>
</div>

<div>
    <h2>Add new task</h2>
    <form>
        <input type="text">
        <input type="text">
        <input type="checkbox">
        <input type="submit">
    </form>
</div>

</body>
</html>
