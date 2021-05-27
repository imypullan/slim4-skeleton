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
    <h1>Things I need to do</h1>
</header>
<main>
    <div class="todoTask">
            <?php

            foreach($tasks as $task)
            {
                $id = intval($task['id']);
                echo '<div><h3>' . $task['task_name'] . '</h3></div>';
                echo '<div><form action="/markDone" method="get">
            <input type="hidden" name="id" value= '.  $id . '>
            <input class="symbolButton" type="submit" value="&#10003;">
        </form>';
                echo '<form action="/edit" method="get">
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
        echo '<div><h3 class="emptyMessage">You don\'t have anything to do yet</h3></div>';
    }
    ?>
    <div class="addTask">
        <form action="/addTask" method="post">
            <div>
                <label for="task_name">Add task</label>
            </div>
            <div>
                <input class="textBox" type="text" name="task_name">
                <input type="submit" class="symbolButton submitButton" value="&rarr;">
            </div>
        </form>
    </div>
    <div class="linker">
        <a href="/done"><h2>What have I done?</h2></a>
    </div>
</main>
</body>
</html>
