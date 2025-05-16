<?php $this->layout("_theme", ["title" => $title]); ?>
<a href="<?= url("/") ?>" class="nav-config">
    <h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
        </svg> Home
    </h2>
</a>

<div class="content-config">
    <div>
        <h1>Perfil</h1>
        <br>
        <form action="" method="post">
            <div class="campos">
                <div>
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="cpf">CPF</label><br>
                    <input class="CPF" type="text" name="cpf" id="cpf" required>
                </div>
            </div>
            <div>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" id="matricula" required>
            </div>
            <br>
            <div>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="senha">Senha</label><br>
                <input type="password" name="senha" id="senha" required>
            </div>

            <div class="button-container">
                <button>Salvar</button>
            </div>
        </form>
    </div>
    <div class="div-line"></div>

    <div>
        <h1>Horário de expediente</h1>
        <br>
        <form action="" method="post">
            <div>
                <label for="entrada">Entrada</label><br>
                <input type="time" name="entrada" id="entrada" required>
            </div>
            <div>
                <label for="ini_intervalo">Início intervalo</label><br>
                <input type="time" name="ini_intervalo" id="ini_intervalo" required>
            </div>
            <div>
                <label for="fim_intervalo">Fim intervalo</label><br>
                <input type="time" name="fim_intervalo" id="fim_intervalo" required>
            </div>
            <div>
                <label for="saida">Saída</label><br>
                <input type="time" name="saida" id="saida" required>
            </div>
            <div class="button-container">
                <button>Salvar</button>
            </div>
        </form>
    </div>

    <div class="div-line"></div>
    <div>
        <form action="" method="post">
            <h1>Férias programadas</h1>
            <div class="campos">
                <div>
                    <label for=" ferias-ini">Novas férias</label><br>
                    <input type="date" id="ferias-ini" value="2025-01-01" required>
                </div>
                <span class="hifen">-</span>
                <div>
                    <input type="date" id="ferias-fim" value="2025-01-01" required>
                </div>
                <div>
                    <div class="btn_circular">
                        <span> + </span>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <h3>Férias pendentes:</h3>
        <ul id="ferias-marcadas-lista">
            <li>
                <div class="ferias-marcadas">
                    <p>07/06/2025 - 07/07/2025 (Pendente)</p>
                    <div class="acoes">
                        <div class="btn_circular btn-lixeira" onclick="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                            </svg>
                        </div>
                        <div class="btn_circular btn-lixeira" onclick="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </div>
                    </div>
            </li>
        </ul>
    </div>
</div>
</div>


<?php $this->start("js"); ?>
<script>
    $(document).ready(function() {});
</script>
<?php $this->end("js"); ?>