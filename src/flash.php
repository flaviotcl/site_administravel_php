<?php

function flash($message = null, $type = null)
{
    if ($message)
    {
       /***
        *   A function compact constrói um Array e busca as variáveis automaticamente
        *   sem precisar ficar digitando desta forma:
        *    
        *   $_SESSION['flash'][] = [
        *                   'message' => $message,  
        *                   'type' => $type       
        *           ];
        ***/
       $_SESSION['flash'][] = compact('message','type');
    }
    else
    {
        $flash = $_SESSION['flash'] ?? []; // Retorna o conteúdo da variável ou caso não exista, retorna um Array vazio.
        if (!count($flash)) {
            return;
        }

        foreach ($flash as $key => $message) {
            render('flash', 'ajax', $message);
            unset($_SESSION['flash'][$key]);
        }

    }
    
}