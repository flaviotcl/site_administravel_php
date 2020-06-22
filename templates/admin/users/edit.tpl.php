<h3 class="mb-5">Administração de Usuários</h3>

<form method="post">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input id="usersEmail" type="email" name="email" class="form-control" value="<?php echo $data["user"]["email"]; ?>">
    </div>
    <div class="form-group">
        <label for="usersPasswd">Password</label>
        <input id="usersPasswd" type="password" name="password" class="form-control" value="">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">SAVE</button>
</form>

<hr>

<a href="/admin/users/<?php echo $data["user"]["id"]; ?>" class="btn btn-secondary btn-sm">BACK</a>


