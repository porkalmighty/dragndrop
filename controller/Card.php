<?php
Class Card
{
    public function getCards($taskIndex, $dbcon)
    {
        $query = "SELECT * FROM cards LEFT JOIN tasklist_cards ON cards.id = tasklist_cards.card_id WHERE task_id = :taskIndex";
        $prepare = $dbcon->prepare($query);
        $prepare->bindParam(':taskIndex', $taskIndex);
        $prepare->execute();

        $result = $prepare->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

}
