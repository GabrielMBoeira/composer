<?php

require_once '../vendor/autoload.php';


$dadosForm = ["nome" => "Gabriel Machado", "email" => "gboeira777@gmail.com"];
$regras = [
    "nome" => "required|max_len,100|min_len,6",
    "email" => "required|max_len,100|valid_email"
];


echo "oi";  //teste