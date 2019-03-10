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
            $taskList .= "<div class='tasklist__wrapper'>";
            $taskList .= "<div class='tasklist__header'>";
            $taskList .= sprintf("<div class='tasklist__title'><h2>%s:</h2></div>", $t->title);
            $taskList .= "</div>";
            $taskList .= "<div class='tasklist__body tasklist__nested'>";
            $taskList .= $this->generateCards($cards->getCards($t->id, $db));
            $taskList .= "</div>";
            $taskList .= "<div class='tasklist__footer'>";
            $taskList .= "<button type='button' name='new_card' value='1'>Add new card</button>";
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
            $cardList .= sprintf("<div class='card' data-index='%d'>", $c->id);
            $cardList .= sprintf("<div class='card__title'>%s</div>", $c->card_title);
            $cardList .= sprintf("<div class='card__description'>%s</div>", $c->card_desc);
            $cardList .= "</div>";
        }
        return $cardList;
    }
}
