<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<h1>(Not)todo</h1>
<div>
    <?php foreach($tasks as $task)
    {
        echo '<h3>' . $task['task_name'] . '</h3>';
        echo '<form action="/delete" method="get">
            <input type="checkbox" name="id" value= '.  $task['id'] . '>
            <input type="submit" value="mark as done">
        </form>';
    } ?>
</div>


</body>
</html>
