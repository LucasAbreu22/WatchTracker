<?php $this->layout("_theme", ["title" => $title]); ?>

<div id="cabecalho">
    <div id="mes_nav">
        <button>
            <
                </button>
                <span><b>Junho/2025</b></span>
                <button>></button>
    </div>
    <div id="resumo_mes">
        <div id="horas_trabalho">
            <div><b>Horas trabalhadas no mês</b></div>
            <div class="calculadas"><span>Previstas: 176h</span><span>Efetivas: 186h</span></div>
        </div>
        <div id="horas_saldo">
            <div><b>Horas trabalhadas no mês</b></div>
            <div class="calculadas"><span>Previstas: 176h</span><span>Efetivas: 186h</span></div>
        </div>
    </div>
    <a href="#">Configurações</a>
</div>
<table id="dias_calendario">
    <thead id="dia_coluna">
        <th>
            <h2>Dom</h2>
        </th>
        <th>
            <h2>Seg</h2>
        </th>
        <th>
            <h2>Ter</h2>
        </th>
        <th>
            <h2>Qua</h2>
        </th>
        <th>
            <h2>Qui</h2>
        </th>
        <th>
            <h2>Sex</h2>
        </th>
        <th>
            <h2>Sab</h2>
        </th>
    </thead>
    <tbody>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
        <tr class="dia_linha">
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
            <td>
                <div class="dia_card"></div>
            </td>
        </tr>
    </tbody>
</table>
<?php $this->start("js"); ?>
<script>
    $(document).ready(function() {

    });
</script>
<?php $this->end("js"); ?>