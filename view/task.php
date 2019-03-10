<?php
    $db = Database::getDb();
    $tasks = new Task();
    $getTasks = $tasks->getAllTasks($db);
    $cards = new Card();
    $gen = new Generate();
    $i = 1;
    $c = [];
    // foreach($getTasks as $task => $t)
    // {
    //     $c[] = $cards->getCards($t->id, $db);
    //     $i++;
    // }
    //
    // echo "<pre>";
    // var_dump($c);
    // echo "</pre>";
?>
<div class="options">
    <a href="add-task.php?idx=4">Add a new task</a>
</div>
<?php
    echo $gen->generateTasks($getTasks);
 ?>
<!-- <div class="tasklist">
    <div class="tasklist__wrapper">
        <div class="tasklist__header">
            <div class="tasklist__title"><h2>To do:</h2></div>
        </div>
        <div class="tasklist__body tasklist__nested">
            <div class="card" data-index="1"> Item 1 </div>
            <div class="card" data-index="2"> Item 2 </div>
            <div class="card" data-index="3"> Item 3 </div>
            <div class="card" data-index="4"> Item 4 </div>
        </div>
        <div class="tasklist__footer">
            <button type="button" name="new_card" value="1">Add new card</button>
        </div>
    </div>
    <div class="tasklist__wrapper">
        <div class="tasklist__header">
            <div class="tasklist__title"><h2>Doing:</h2></div>
        </div>
        <div class="tasklist__body tasklist__nested"></div>
        <div class="tasklist__footer">
            <button type="button" name="new_card" value="2">Add new card</button>
        </div>
    </div>
    <div class="tasklist__wrapper">
        <div class="tasklist__header">
            <div class="tasklist__title"><h2>Done:</h2></div>
        </div>
        <div class="tasklist__body tasklist__nested"></div>
        <div class="tasklist__footer">
            <button type="button" name="new_card" value="3">Add new card</button>
        </div>
    </div>
</div> -->
