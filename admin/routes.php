<?php

auth_protection();

if ( resolve('/admin'))
{
    render('admin/home','admin');
}
elseif ( resolve('/admin/pages.*'))
{
    include __DIR__.'/pages/routes.php';
}
elseif ( resolve('/admin/auth.*'))
{
    include __DIR__.'/auth/routes.php';
}
elseif ( resolve('/admin/users.*'))
{
    include __DIR__.'/users/routes.php';
}
elseif ( resolve('/admin/upload/image'))
{
    $file = $_FILES['file'] ?? null;

    // Encerro a execução do script pois nenhum arquivo foi enviado.
    if (!$file)
    {
        http_response_code(422);
        echo json_encode(['status' => 'Nenhum Arquivo Enviado!']); 
        exit;
    }
    
    $allowedTypes = [
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/png'
    ];

    // Encerro a execução do script pois foi enviado um Arquivo Não permitido.
    if (!in_array($file['type'], $allowedTypes))
    {
        http_response_code(422);
        echo "Arquivo não Permitido!"; 
        exit;
    }

    $name = uniqid(rand(), true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

    move_uploaded_file($file['tmp_name'], __DIR__ . '/../public/upload/' . $name);

    echo '/upload/' . $name;

}
else
{
    http_response_code(404);
    echo 'Página não encontrada';
}