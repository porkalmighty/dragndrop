<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Drag and drop</title>
        <link rel="stylesheet" href="lib/style.css">
    </head>
    <body>
        <?php
        require_once 'model/Database.php';
        require_once 'controller/Task.php';
        require_once 'controller/Card.php';
        require_once 'controller/Generate.php';
        require_once 'view/task.php'; ?>
        <footer></footer>
        <!-- jsDelivr :: Sortable :: Latest (https://www.jsdelivr.com/package/npm/sortablejs) -->
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
        <script src="lib/script.js"></script>
    </body>
</html>
