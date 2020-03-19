<?php


namespace App\Models;


use SON\Model;

class Autenticacao extends Model
{
    public function all()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $result = $this->getPdo()->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserByCpf($cpf)
    {
        $sql = "CALL spselidecandidato(?)";
        $smtp = $this->getPdo()->prepare($sql);
        $smtp->bindValue(1, $cpf);
        $smtp->execute();
        $user = $smtp->fetch();
        return $user;
    }
}
