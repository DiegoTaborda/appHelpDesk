<?php

    //print_r($_POST);

    session_start();

    $arquivo = fopen("../../../app_help_desk/valida_login.php", 'a');

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);	

    $texto = $_SESSION['id'] . "#" . $titulo ."#". $categoria ."#". $descricao . PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    // echo $texto;

    header('Location: abrir_chamado.php');
?>