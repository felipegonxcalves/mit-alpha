<?php


namespace App\Controllers;


use App\Models\Autenticacao;
use SON\Controller;
use SON\Model;

class AutenticacaoController extends Controller
{
    protected $questoes;

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
                exit;
            }
            else{

                $_SESSION['DATA_USER'] = $user;
                header("Location: /render-after-login");
                exit;
            }

        }
    }
}
