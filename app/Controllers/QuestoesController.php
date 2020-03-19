<?php


namespace App\Controllers;


use App\Models\Questao;
use SON\Controller;
use SON\Model;

class QuestoesController extends Controller
{
    protected $questaoModel;
    public function __construct(Questao $questao)
    {
        if (!isset($_SESSION['DATA_USER'])){
            header("Location: /login");exit;
        }

        $this->questaoModel = $questao;
    }

    public function renderQuestion($numQuestion)
    {
        $this->render(['data' => null], "questoes/{$numQuestion}");
    }

    public function renderAfterLogin()
    {
        $this->renderQuestion("questao01");
//        self::renderQuestion($numQuestion);
    }

    public function storeQuestoesIndex()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // chamo o model e salvo no banco
            // redirectiono para a view
            $dataRequest = $_POST;

            $ide_entrevistado = $_SESSION['DATA_USER']['ideentrevistado'];

            foreach ($dataRequest['check_per_1'] as $resposta){
                $data_insert = [
                    'ideentrevistado' => $ide_entrevistado,
                    'nro_questao' => $dataRequest['nro_questao'],
                    'desresposta' => $resposta

                ];
                $this->questaoModel->insertQuestion($data_insert);
            }

            $this->renderQuestion($dataRequest['prox_questao']);
        }
    }
}
