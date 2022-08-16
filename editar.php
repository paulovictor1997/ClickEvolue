<h1>Editar Usuário</h1>
<?php
   //echo $_REQUEST["id"];
   $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
   //echo $sql;
   $res = $conn->query($sql);
   $row = $res->fetch_object();
?>
<form method="POST" action="?page=salvar">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value ="<?php print$row->nome; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" value ="<?php print$row->email;?>"class="form-control" >
    </div>

    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="data">Data de nascimento</label>
        <input type="date" name="data_nasc"  value ="<?php print$row->data_nasc;?>"class="form-control" required >
    </div>

    <div class="mb-3">
       <button type="submit" class="btn btn-secondary">Enviar</button>
    </div>
</form>