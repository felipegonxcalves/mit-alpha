<?php


namespace App\Controllers;


use SON\Controller;

class QuestoesController extends Controller
{
    public function renderQuestion($numQuestion)
    {
        $this->render(['data' => null], "questoes/{$numQuestion}");
    }

    public function renderAfterLogin()
    {
        $this->renderQuestion($_GET['numQuestion']);
    }

    public function storeQuestoesIndex()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // chamo o model e salvo no banco
            // redirectiono para a view
        }
//        $ide_entrevistado = \Session::get('logado');
//
//        foreach ($request->check_per_1 as $resposta){
//            \DB::select('call spinsresposta2(?, ?, ?)',[
//                $ide_entrevistado['ide_ntrevistado'][0]->ideentrevistado,
//                $request->nro_questao,
//                $resposta
//            ]);
//        }
//
//        return \redirect()->route($request->prox_questao);
    }
}
