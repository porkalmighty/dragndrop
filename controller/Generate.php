<?php
class Generate
{
    public function generateTasks($tasks)
    {
        $taskList = "";
        $cards = new Card();
        $db = Database::getDb();
        $taskList .= "<div class='tasklist'>";
        foreach($tasks as $task => $t)
        {
            $taskList .= "<div class='tasklist__wrapper filtered'>";
            $taskList .= "<div class='tasklist__header filtered'>";
            $taskList .= sprintf("<div class='tasklist__title'><h2>%s:</h2></div>", $t->title);
            $taskList .= "</div>";
            $taskList .= sprintf("<div class='tasklist__body tasklist__nested' data-task='%d'>", $t->task_index);
            $taskList .= $this->generateCards($cards->getCards($t->id, $db));
            $taskList .= "</div>";
            $taskList .= "<div class='tasklist__footer'>";
            if($t->id == 1){
                $taskList .= sprintf("<button type='button' name='new_card' value='%s'>Add new card</button>", $t->id);
            }
            $taskList .= "</div>
                </div>";
        }
        $taskList .= "</div>";
        return $taskList;
    }

    public function generateCards($cards)
    {
        $cardList = "";
        foreach($cards as $card => $c)
        {
            $cardList .= sprintf("<div class='card' data-id='%d' data-index='%d'>", $c->id, $c->card_index);
            $cardList .= sprintf("<div class='card__title'>%s</div>", $c->card_title);
            $cardList .= sprintf("<div class='card__description'>%s</div>", $c->card_desc);
            $cardList .= "</div>";
        }
        return $cardList;
    }
}
