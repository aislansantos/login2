<?php

class Usuarios
{
    private $name;
    private $email;
    private $type;
    private $pdo;


    /** comando de gettrs e settrs */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


    public function listarUsuarios(){
        $sql = "SELECT * FROM Usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }else{
            return array();
        }
    }
}
