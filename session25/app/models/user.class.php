<?php

class User{
    private $full_name;
    private $username;
    private $email;
    private $password;
    private $id;
    private static $tableName = "users";

    public function __construct($full_name,
                                $username,
                                $email,
                                $password,
                                $id="")
    {
        $this->full_name = $full_name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;

    }

    public function insert() {
        global $dbh;

        $sql = "INSERT INTO ". self::$tableName ." (full_name, username, email, password) 
                              VALUES(:full_name, :username, :email, :password)";
        $stm = $dbh->prepare($sql);
        $data = [
            ':full_name'=> $this->full_name,
            ':username'=> $this->username,
            ':password'=> $this->password,
            ':email'=> $this->email
        ];

        if ($stm->execute($data)) {
            return $dbh->lastInsertId();
        } else {
            return false;
        }


    }

    public function update() {
        global $dbh;

        $sql = "UPDATE ". self::$tableName ." SET username=:username,
                                  full_name=:full_name,
                                  email=:email,
                                  password=:password
                              WHERE id=:id";

        $stm = $dbh->prepare($sql);
        $data = [
            ':full_name'=> $this->full_name,
            ':username'=> $this->username,
            ':password'=> $this->password,
            ':email'=> $this->email,
            ':id'=> $this->id
        ];

        if ($stm->execute($data)) {
            return true;
        } else {
            return false;
        }


    }

    /**
     * @return array|bool
     */
    public static function all(){
        global $dbh;

        $sql = "SELECT * FROM " . self::$tableName;
        $stm = $dbh->prepare($sql);

        return $stm->execute() ? $stm->fetchAll() : false;

    }

    /**
     * select by custom attribute default attribute (id)
     * @param $value
     * @param string $attr (username or full_name or ...)
     * @return array=Row|Table|Empty
     */
    public static function find($value, $attr="id"){
        global $dbh;

        $sql = "SELECT * FROM " . self::$tableName . " WHERE $attr =:value";
        $stm = $dbh->prepare($sql);

        $result =  $stm->execute([':value'=>$value]) ? $stm->fetchAll() : false;

        return $attr != 'id'? $result : $result[0];

    }



}