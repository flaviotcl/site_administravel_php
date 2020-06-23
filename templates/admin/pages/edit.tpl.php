<h3 class="mb-5">Edição de Página</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Aqui vai o título da página ...." required value="<?php echo $data['page']['title']; ?>"> 

    </div>
    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="Url amigável, deixei em branco p/ informar a Página Inicial ..." value="<?php echo $data['page']['url']; ?>">
        </div>
        
    </div>
    <div class="form-group">
        <!-- Tag q/ inseri o Editor de Texto, trix.js e trix.css carregos de /resources/trix/ -->
        <input name ="body" id="pagesBody" type="hidden" value="<?php echo htmlentities($data['page']['body']); ?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">SAVE</button>
</form>

<hr>

<a href="/admin/pages/<?php echo $data['page']['id']; ?>" class="btn btn-secondary btn-sm">BACK</a>