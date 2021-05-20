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
    <form action="editTask">
        <input type="text" value=""
    </form>
</div>




<div class="add_db_entry">
    <form action="update_db.php" method="post">
        <h3>Edit winner:</h3>
        <div class="entry_field"><label for="prize_year">Prize year:</label>
            <input type="number" name="prize_year" value="<?php echo $winner['prize_year'] ?>"/></div>
        <div class="entry_field"><label for="author_name">Author's name:</label>
            <input type="text" name="author_name" value="<?php echo $winner['author_name'] ?>"/></div>
        <div class="entry_field"><label for="book_name">Title:</label>
            <input type="text" name="book_name" value="<?php echo $winner['book_name'] ?>"/></div>
        <div class="entry_field"><label for="author_nationality">Author's nationality:</label>
            <input type="text" name="author_nationality" value="<?php echo $winner['author_nationality'] ?>"></div>
        <div class="entry_field"><input type="submit" class="entry_field submit"/>
            <input type="hidden" name="id" value="<?php echo $winner['id'] ?>" /></div>
        <div class="go_back"><span class="return"><a href="index.php">go back.</a></span></div>
    </form>
</div>




</body>
</html>
