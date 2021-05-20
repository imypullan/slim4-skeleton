<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Toedit</h1>
<div>
    <form action="/editTask" method="post">
        <input type="text" value="<?php echo $task['task_name']?>">
        <input type="hidden" value="<?php $task['id']?>">
        <input type="submit" value="Edit">
    </form>
</div>

</body>
</html>
