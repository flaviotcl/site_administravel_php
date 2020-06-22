<?php

include __DIR__.'/db.php';

if ( resolve('/admin/users'))
{
   $users = $users_all();
   render('admin/users/index','admin', compact('users'));
}
elseif ( resolve('/admin/users/create'))
{
   if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
      $users_create();
      return header('location: /admin/users');
   }

   render('admin/users/create', 'admin');
}
elseif ( resolve('/admin/users/(\d+)'))
{
   render('admin/users/view', 'admin');
}
elseif ( resolve('/admin/users/(\d+)/edit'))
{
   render('admin/users/edit', 'admin');
}
elseif ( resolve('/admin/users/(\d+)/delete'))
{
   return header('location: /admin/users');
}