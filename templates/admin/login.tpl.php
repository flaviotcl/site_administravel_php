<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Painel Administrativo - Site Treinamento</title>
  </head>
  <body class="d-flex flex-column bg-warning">
    <div id="header">
        <nav class="navbar  navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">Admin Site</a>
            
                <span class="navbar-text">
                    Painel Administrativo
                </span>
            </span>
          
        </nav>
    </div>
    <div id="main">
        <div class="row justify-content-center">
         
            <div id="content" class="col-4 align-self-center">
                <?php include $content ?>   
            </div>
        </div>
         
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
       
        <?php flash(); ?>   
       
    </script>
    </body>
</html>