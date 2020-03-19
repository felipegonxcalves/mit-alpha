<?php

$resolver = new SON\Resolver;

$resolver['PDO'] = function ($r) {
    return new PDO('mysql:host=mysql.perfil.alphage.com.br;dbname=perfil', 'perfil', 'jlkb3302', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;
