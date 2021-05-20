<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Todo List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>(Not)todo</h1>
<div>
    <?php foreach($tasks as $task)
    {
        $id = intval($task['id']);
        echo '<h3>' . $task['task_name'] . '</h3>';
        echo '<form action="/delete" method="get">
            <input type="checkbox" name="id" value= '.  $id . '>
            <input type="submit" value="delete">
        </form>';
    } ?>
</div>

<div>
    <a href="/"><h2>See what you have left to do</h2></a>
</div>

</body>
</html>
