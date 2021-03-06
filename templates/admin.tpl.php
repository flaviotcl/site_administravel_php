<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Painel Administrativo - Site Treinamento</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar  navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">Admin Site</a>
            
                <span class="navbar-text">
                    Painel Administrativo
                </span>
            </span>
            <a href="/admin/auth/logout" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col-2">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link <?php if (resolve('/admin/pages.*')): ?> active<?php endif;?>"><i class="far fa-file-alt"></i> Páginas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link<?php if (resolve('/admin/users.*')): ?> active<?php endif;?>"><i class="far fa-user"></i> Usuários</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>   
            </div>
        </div>
         
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/resources/trix/trix.js"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
        document.addEventListener('trix-attachment-add', function(){
            const attachment = event.attachment;
            if(!attachment.file)
            {
                return;
            }

            const form = new FormData();
            form.append('file', attachment.file);

            $.ajax({
                url: '/admin/upload/image',
                method: 'POST',
                data: form,
                contentType: false,
                processData: false,
                xhr: function (){
                    const xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(e){
                        let progress = e.loaded / e.total * 100;
                        attachment.setUploadProgress(progress);  
                    })

                    return xhr;
                }
            }).done( function (response) {

                console.log(response);

                attachment.setAttributes({
                    url: response,
                    href: response
                });


            }).fail( function(){
                console.log('Deu errado');
            });
        });

        <?php flash(); ?>   

        const confirmEl = document.querySelector('.confirm');

        if (confirmEl) {
            confirmEl.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Tem certeza que quer fazer isso?')) {
                    window.location = e.target.getAttribute('href');
                }
            });
        }
            
    </script>
    </body>
</html>