<?php


namespace App\Controllers;


use SON\Controller;

class AutenticacaoController extends Controller
{
    public function pageRenderLogin()
    {
        $this->render(['data' => null], 'login/login');
    }
}
