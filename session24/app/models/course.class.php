<?php

class Course{
    private $name;
    private $user_id;
    private $id;
    private static $tableName = "courses";

    public function __construct($name,
                                $user_id,
                                $id="")
    {
        $this->name = $name;
        $this->user_id = $user_id;
        $this->id = $id;

    }

    public function insert() {
        global $dbh;

        $sql = "INSERT INTO ". self::$tableName ." (name, user_id) 
                              VALUES(:name, :user_id)";
        $stm = $dbh->prepare($sql);
        $data = [
            ':name'=> $this->name,
            ':user_id'=> $this->user_id
        ];

        if ($stm->execute($data)) {
            return $dbh->lastInsertId();
        } else {
            return false;
        }


    }

    public function update() {
        global $dbh;

        $sql = "UPDATE ". self::$tableName ." SET user_id=:user_id,
                                                    name=:name
                                            WHERE id=:id";

        $stm = $dbh->prepare($sql);
        $data = [
            ':name'=> $this->name,
            ':user_id'=> $this->user_id,
            ':id'=> $this->id
        ];

        if ($stm->execute($data)) {
            return true;
        } else {
            return false;
        }


    }

    public static function all(){
        global $dbh;

        $sql = "SELECT courses.*, users.full_name as user_name FROM " . self::$tableName .
            " INNER JOIN users on courses.user_id = users.id";
        $stm = $dbh->prepare($sql);

        return $stm->execute() ? $stm->fetchAll() : false;

    }

    public static function find($id){
        global $dbh;

        $sql = "SELECT * FROM " . self::$tableName . " WHERE id =:id";
        $stm = $dbh->prepare($sql);

        return $stm->execute([':id'=>$id]) ? $stm->fetch() : false;

    }

}