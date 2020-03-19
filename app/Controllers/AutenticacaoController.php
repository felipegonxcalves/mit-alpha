<?php


namespace App\Controllers;


use App\Models\Autenticacao;
use SON\Controller;
use SON\Model;

class AutenticacaoController extends Controller
{
    public function __construct(Autenticacao $model)
    {
        $this->model = $model;
    }

    public function pageRenderLogin()
    {
        $this->render(['data' => null], 'login/login');
    }

    public function validateLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = $_POST;
            $user = $this->model->getUserByCpf($data['cpf']);

            if ($user['stsativo'] == null){
                $this->render(['data' => null], 'login/login');
            }
            else{

                session_start();
                $_SESSION['data_user'] = $user;
                header('location: /render-after-login?numQuestion=questao01');
                exit;
            }

        }
    }
}
