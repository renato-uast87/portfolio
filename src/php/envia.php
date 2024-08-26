<?php

	$para      = "petrorenato@gmail.com"; // E-mail Destino

    $nome      = addcslashes($_POST['nome']);
    $email     = addcslashes($_POST['email']);
    $telefone  = addcslashes($_POST['telefone']);
    $assunto   = addcslashes($_POST['assunto']);
    $mensagem  = addcslashes($_POST['mensagem']);

    $local     = "Meu Site";

    $corpo     = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    if (mail($para, $assunto, $corpo)) {
        header('Location: index.html?mensagem=Mensagem+enviada+com+sucesso!');
    } else {
        header('Location: index.html?mensagem=Erro+ao+enviar+a+mensagem.');
    }

?>