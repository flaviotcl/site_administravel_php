<?php

include __DIR__.'/db.php';

if ( resolve('/admin/auth/login'))
{
   if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
       $password = filter_input(INPUT_POST, 'password') ?? null;
       $email = filter_input(INPUT_POST, 'email') ?? null;
       if (!$password || !$email)
       {
           flash('Digite seu Email/Senha !','error');
           header('location: /admin/auth/login');
           exit;
       }
       if($login())
       {
           flash('Login realizado com Sucesso !','success');
           header('location: /admin');
       }else
       {
           flash('Email/Senha inválidos !','error');
           header('location: /admin/auth/login');
           exit;
       }
       
   }
   render('admin/auth/login','admin/login');
   
}elseif (resolve('/admin/auth/logout')) {
    logout();
}