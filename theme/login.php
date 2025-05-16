<?php $this->layout("_theme", ["title" => $title]); ?>

<div class="content-login">
    <h1>WatchTracker</h1>
    <br>
    <form action="" method="post">
        <div>
            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" id="senha" required>
        </div>
        <a href="<?= url("/login/criarConta") ?>">Criar conta?</a>
        <div class="button-container">
            <button>Logar</button>
        </div>
    </form>
</div>


<?php $this->start("js"); ?>
<script>
    $(document).ready(function() {});
</script>
<?php $this->end("js"); ?>