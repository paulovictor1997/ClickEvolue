<h1>Novo Usuário</h1>
<form method="POST" action="?page=salvar">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="data">Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>

    <div class="mb-3">
       <button type="submit" class="btn btn-secondary">Enviar</button>
    </div>
</form>