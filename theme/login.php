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
        <a href="<?= url("/login/criarUsuario") ?>">Criar conta?</a>
        <div class="button-container">
            <button>Logar</button>
        </div>
    </form>
</div>


<?php $this->start("js"); ?>
<script>
    $(document).ready(function() {
        $("form").submit((e) => {
            e.preventDefault();

            logar();
        });
    });


    async function logar() {
        mostrarLoading();
        let email = $("#email").val().trim();
        let senha = $("#senha").val().trim();

        if (email === "") {
            alert("Campo de E-MAIL vazio!");
            return false;
        }
        if (senha === "") {
            alert("Campo de SENHA vazio!");
            return false;
        }

        await validarEmail(email);

        await $.ajax({
            type: "POST",
            url: "<?= url("/login/logar") ?>",
            data: {
                email: email,
                senha: senha
            },
            dataType: "json",
            success: function(response) {

                if (response.message.indexOf("[ERRO]") !== 0) window.location.href = "<?= url("/"); ?>";
                else alert(response.message);
            }
        });
        ocultarLoading();

    }
</script>
<?php $this->end("js"); ?>