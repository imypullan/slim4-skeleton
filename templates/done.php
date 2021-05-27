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
    <h1>Things I don't need to do anymore</h1>
</header>
<main>
    <div class="todoTask">
        <?php foreach($tasks as $task)
        {
            $id = intval($task['id']);
            echo '<div><h3>' . $task['task_name'] . '</h3></div>';
            echo '<div><form action="/edit" method="get">
            <input type="hidden" name="id" value= '.  $id . '>
            <input class="symbolButton" type="submit" value="&#x270E;">
        </form>';
            echo '<form action="/delete" method="get">
            <input type="hidden" name="id" value= '.  $id . '>
            <input class="symbolButton" type="submit" value="&#128465;">
        </form></div>';
        }
        ?>
    </div>
    <?php
    if(count($tasks) < 1)
    {
        echo '<div><h3 class="emptyMessage">You haven\'t done anything yet</h3></div>';
    }
    ?>
    <div class="linker">
        <a href="/"><h2>What do I still need to do?</h2></a>
    </div>
</main>
</body>
</html>
