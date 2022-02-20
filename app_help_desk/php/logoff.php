<?php

    session_start();

    // print_r($_SESSION);
    // unset($_SESSION['autenticado']);
    // print_r($_SESSION);
    //remover índices do array de sessão
    //unset()

    // print_r($_SESSION);
    // session_destroy();
    // print_r($_SESSION);
    //destruir a variável de sessão
    //session_destroy()

    session_destroy();
    header('Location: index.php');
?>