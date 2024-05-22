<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
  "Olá Mundo, Esse é o Mue Primeiro E-mail",
  "<h1>Estou apenas testando!</h1>",
  "Matheus G Zancanela",
  "matheusgzpessoal@gmail.com"
)->send();

if(!$email->error()){
  var_dump(true);
} else {
  echo $email->error()->getMessage();
}