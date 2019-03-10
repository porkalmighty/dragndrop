<?php
class Task
{
    public function getAllTasks($dbcon)
    {
        $query = "SELECT * FROM tasklist";
        $preparedStatement = $dbcon->prepare($query);
        $preparedStatement->execute();
        $result = $preparedStatement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}
