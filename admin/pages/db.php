<?php
function pages_get_data ($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (!$title) {
        flash('Informe o campo de título', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'body', 'url');
}
$pages_all = function() use ($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id){
    //Buscar uma única Página.
};

$pages_create = function() use ($conn){
    //Cadastrar uma Página.
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, url, updated, created) VALUES (?, ?, ?, NOW(), NOW())';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['body'], $data['url']);

    flash('Criou registro com sucesso', 'success');

    return $stmt->execute();
};

$pages_edit = function($id){
    //Atualizar uma página.
    flash('Atualizou registro com Sucesso', 'success');
};

$pages_delete = function($id){
    //Remover uma Página.
    flash('Removeu registro com Sucesso', 'success');
};