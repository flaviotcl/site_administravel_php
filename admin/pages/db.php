<?php

$pages_all = function(){
    //Listar todas as Páginas
};

$pages_one = function($id){
    //Buscar uma única Página.
};

$pages_create = function(){
    //Cadastrar uma Página.
    flash('Criou registro com Sucesso', 'success');
};

$pages_edit = function($id){
    //Atualizar uma página.
    flash('Atualizou registro com Sucesso', 'success');
};

$pages_delete = function($id){
    //Remover uma Página.
    flash('Removeu registro com Sucesso', 'success');
};