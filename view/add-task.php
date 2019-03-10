<form action="" method="post">
    Title: <input type="text" name="task_title" />
    Description : <input type="text" name="task_description" />
    <input type="hidden" name="task_index" value="<?= isset($_GET['idx']) ? $_GET['idx'] : 0 ?>" />
    <input type="submit" name="add_task" value="Add new task" />
</form>
<?php
if(isset($_POST['add_task']))
{
    $task = [];
    $task[] = $_POST['task_title'];
    $task[] = $_POST['task_description'];
    $task[] = $_POST['task_index'];
}
