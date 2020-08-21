<?php
class Login
{
    private $user;
    private $email;
    private $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($u)
    {
        $this->user = $u;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->email = $e;

        return $this;
    }


    public function Login()
    {
        $sql = "SELECT * FROM usuarios WHERE nome = '$this->user' AND email = '$this->email' ";
        $sql = $this->pdo->query($sql);


        if ($sql->rowCount() > 0) {
            $_SESSION['ativo'] = true;
            $_SESSION['user'] = $this->user;

            header("Location: principal.php");
        }
    }
}
