<?php

class Projects
{
    public int $id;
    public string $title;
    public string $text;
    public int $userId;

    public function __construct($id = null)
    {
        if(!empty($id))
        {
            $this->getOne($id);
        }
    }

    public static function get(): object
    {
        return DataBase::getInstance()->query("SELECT * FROM blogs");
    }

    public function getOne($id): object
    {
        $sql = "SELECT * FROM blogs WHERE id = ?";

        try
        {
            $statement = DataBase::getInstance()->prepare($sql);
            $statement->execute([$id]);

            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if(!empty($result))
            {
                $this->id = $result['id'];
                $this->title = $result['title'];
                $this->text = $result['text'];
                $this->userId = $result['account_id'];
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            die();
        }

        return $this;
    }

}

