<?php


    $nome      = addcslashes($_POST['nome']);
    $email     = addcslashes($_POST['email']);
    $telefone  = addcslashes($_POST['telefone']);
    $assunto   = addcslashes($_POST['assunto']);
    $mensagem  = addcslashes($_POST['mensagem']);

    $para      = "petrorenato@gmail.com"; // E-mail Destino
    $local     = "Meu Site";

    $corpo     = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: meusite@renato-uast87.github.io/portfolio/index.html"

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo("E-mail enviado com sucesso!!!");
    } else {
        echo("Falha!!!");
    }

?>