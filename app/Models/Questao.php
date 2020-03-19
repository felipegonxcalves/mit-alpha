<?php


namespace App\Models;


use SON\Model;

class Questao extends Model
{
    public function insertQuestion($data)
    {
//        var_dump($data);
        $sql = "CALL spinsresposta2(?, ?, ?)";
        $smtp = $this->getPdo()->prepare($sql);
        $smtp->bindValue(1, $data['ideentrevistado']);
        $smtp->bindValue(2, $data['nro_questao']);
        $smtp->bindValue(3, $data['desresposta']);
        $smtp->execute();

        return $smtp;
    }
}
