<?php $this->layout("_theme", ["title" => $title]); ?>

<div class="content-login">

    <h1>Criar conta</h1>
    <br>
    <form method="post">
        <div>
            <label for="nome">Nome*</label><br>
            <input type="text" id="nome" required>
        </div>
        <div>
            <label for="cpf">CPF*</label><br>
            <input class="CPF" type="text" id="cpf" required>
        </div>
        <div>
            <label for="matricula">Matrícula</label><br>
            <input type="text" id="matricula">
        </div>
        <div>
            <label for="email">E-mail*</label><br>
            <input type="email" id="email" required>
        </div>
        <div>
            <label for="senha">Senha*</label><br>
            <input type="password" id="senha" required>
        </div>
        <br>
        <div class="button-container">
            <button>Criar</button>
        </div>
    </form>
</div>


<?php $this->start("js"); ?>
<script>
    $(document).ready(function() {
        $("form").submit((e) => {
            e.preventDefault();

            criarUsuario();
        });
    });


    async function criarUsuario() {
        mostrarLoading();

        let nome = $("#nome").val().trim();
        let cpf = $("#cpf").val().trim();
        let matricula = $("#matricula").val().trim();
        let email = $("#email").val().trim();
        let senha = $("#senha").val().trim();

        if (nome === "") {
            alert("Campo de NOME vazio!");
            return false;
        }
        if (cpf === "") {
            alert("Campo de CPF vazio!");
            return false;
        }

        if (email === "") {
            alert("Campo de E-MAIL vazio!");
            return false;
        }
        if (senha === "") {
            alert("Campo de SENHA vazio!");
            return false;
        }

        await validarEmail(email);
        await validarCPF(cpf);

        await $.ajax({
            type: "POST",
            url: "<?= url("/login/criarUsuario") ?>",
            data: {
                nome: nome,
                cpf: cpf,
                matricula: matricula,
                email: email,
                senha: senha
            },
            dataType: "json",
            success: function(response) {
                alert(response.message);

                if (response.message.indexOf("[ERRO]") !== 0) window.location.href = "<?= url("/login"); ?>";
            }
        });
        ocultarLoading();

    }
</script>
<?php $this->end("js"); ?>