<?php


require_once '../src/vendor/autoload.php';


$dadosForm = ["nome" => "Gabriel Machado", "email" => "gboeira777@gmail.com"];
$regras = [
    "nome" => "required|max_len,100|min_len,6",
    "email" => "required|max_len,100|valid_email"
];


$is_valid = GUMP::is_valid($dadosForm, $regras);

if ($is_valid) {
    echo "ok";
} else {
    echo "erro";
}