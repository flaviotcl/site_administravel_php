<h3 class="mb-5">Administração de Páginas</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Aqui vai o título da página ....">

    </div>
    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="Url amigável, deixei em branco p/ informar a Página Inicial ...">
        </div>
        
    </div>
    <div class="form-group">
        //Inserção futura de um Editor de Texto.
    </div>
    
    <button type="submit" class="btn btn-primary">SAVE</button>
</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary btn-sm">BACK</a>