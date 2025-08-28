<?php $this->layout("_theme", ["title" => $title]); ?>
<div id="cabecalho">

    <div id="mes_nav">
        <button id="prev" @click="trocarMes('-1')">◄</button>
        <h1 id="monthYear" @click="isOpenDropdown">{{monthYear}}</h1>
        <button id="next" @click="trocarMes('+1')">►</button>
    </div>

    <div class="dropdown" id="monthDropdown" v-if="dropdownEnable">
        <div class="year-controls">
            <button id="prevYear" @click="trocarAno('-1')">◄</button>
            <h2 id="dropdownYear">{{year}}</h2>
            <button id="nextYear" @click="trocarAno('+1')">►</button>
        </div>

        <div id="monthsList">
            <div class="month-option" @click="trocarMes(0)">Janeiro</div>
            <div class="month-option" @click="trocarMes(1)">Fevereiro</div>
            <div class="month-option" @click="trocarMes(2)">Março</div>
            <div class="month-option" @click="trocarMes(3)">Abril</div>
            <div class="month-option" @click="trocarMes(4)">Maio</div>
            <div class="month-option" @click="trocarMes(5)">Junho</div>
            <div class="month-option" @click="trocarMes(6)">Julho</div>
            <div class="month-option" @click="trocarMes(7)">Agosto</div>
            <div class="month-option" @click="trocarMes(7)">Setembro</div>
            <div class="month-option" @click="trocarMes(8)">Outubro</div>
            <div class="month-option" @click="trocarMes(9)">Novembro</div>
            <div class="month-option" @click="trocarMes(10)">Dezembro</div>
        </div>

    </div>

    <div id="resumo_mes">
        <div id="horas_trabalho">
            <h1>Horas trabalhadas no mês</h1>
            <div class="calculadas"><span>Previstas: 176h</span><span>Efetivas: 186h</span></div>
        </div>
        <div id="horas_saldo">
            <h1>Horas trabalhadas no mês</h1>
            <div class="calculadas"><span>Previstas: 176h</span><span>Efetivas: 186h</span></div>
        </div>
    </div>

    <a href="<?= url("/configuracoes") ?>">
        <h2>Configurações</h2>
    </a>

</div>
<table id="dias_calendario">
    <thead id="dia_coluna">
        <tr>
            <th>
                <h1>Dom</h1>
            </th>
            <th>
                <h1>Seg</h1>
            </th>
            <th>
                <h1>Ter</h1>
            </th>
            <th>
                <h1>Qua</h1>
            </th>
            <th>
                <h1>Qui</h1>
            </th>
            <th>
                <h1>Sex</h1>
            </th>
            <th>
                <h1>Sab</h1>
            </th>
        </tr>
    </thead>
    <tbody id="calendar">
        <tr v-for="(semana, i) in semanas" :key="i" class="dia_linha">
            <td v-for="dia in semana" :key="dia.data">
                <div class="dia_card"
                    :class="[dia.classe, dia.data === dataHoje ? 'dia_atual' : '']">
                    <div class="acoes">
                        <h1 class="dia_numero">{{ dia.dia }}</h1>
                        <div class="btn btn_circular" @click="abrirPopup('horarios', dia.data)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"></path>
                            </svg>
                        </div>
                        <div class="btn_add_observacao" @click="abrirPopup('observacao', dia.data)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="pontos_batidos" v-if="pontosPorDia[dia.data]">
                        <div v-for="(ponto, idx) in pontosPorDia[dia.data]" :key="idx">
                            <span>{{ nomeEvento(ponto, idx) }}:</span>
                            <span class="horario">{{ ponto.horario }}</span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div id="popup_dia" class="popup_dia">
    <div class="content">
        <h2>Consolidação do dia {{dia_consolidacao}}</h2>
        <div>
            <span>Tempo trabalhado: {{tempo_trabalhado}}</span>
            <span> Tempo a trabalhar: 4h28</span>
            <span> Intervalo cumprido: {{tempo_intervalo}}</span>
        </div>
        <table>
            <tr v-for="(value, idx) in periodos" :class="classIntervalPop(idx)">
                <td><span>{{value['periodo'][0]}}</span></td>
                <td><span>{{value['periodo'][1]}}</span></td>
                <td><span>{{value['tempo']}} {{idx % 2 === 0 ? "Período trabalhado" : "Perído afastado"}}</span></td>
            </tr>
        </table>
    </div>
</div>

<div class="overlay" id="popupDetalhes" v-if="detalhesOpen">
    <div class="popup">
        <div class="tabs">
            <div>
                <div class="tab horarios" @click="openTab('horarios')">Horários</div>
                <div class="tab observacao" @click="openTab('observacao')">Observação</div>
            </div>
            <div @click="fecharPopup()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </div>
        </div>

        <div class="tab-content horarios">
            <h4>Inclusão de registro de ponto</h4>
            <br>
            <div id="inputs_horarios">
                <div>
                    <label for="txt-data">Data</label><br>
                    <input type="date" name="data" id="txt-data" class="disable" :value="dataDetalhes" disabled>
                </div>
                <div>
                    <label for="txt-hora">Hora</label><br>
                    <input type="time" name="hora" id="txt-hora" class="hora" placeholder="hh:mm" maxlength="5" :value="pontoInput" @input="coletarHora">
                </div>
                <div id="interval_sign">
                    <input type="checkbox" id="chck-intervalo" v-model="intervaloChck" />
                    <label for="chck-intervalo">Intervalo</label>
                </div>
                <div>
                    <div class="btn btn_circular btn-medio" @click="adicionarPonto()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                        </svg>
                    </div>
                </div>
            </div>

            <hr>

            <h4>Horário registrados</h4>
            <br>
            <div id="registros">
                <div id="acoes">
                    <div class="btn btn_circular btn-medio" @click="editarPontos('editar')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" v-if="editarPontosAble"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 237.3C544 220.3 537.3 204 525.3 192L448 114.7C436 102.7 419.7 96 402.7 96L160 96zM192 192C192 174.3 206.3 160 224 160L384 160C401.7 160 416 174.3 416 192L416 256C416 273.7 401.7 288 384 288L224 288C206.3 288 192 273.7 192 256L192 192zM320 352C355.3 352 384 380.7 384 416C384 451.3 355.3 480 320 480C284.7 480 256 451.3 256 416C256 380.7 284.7 352 320 352z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" v-else><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </div>
                    <div class="btn btn_circular btn-medio" @click="editarPontos()" id="btn-fechar-editar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                        </svg>

                    </div>
                </div>
                <div id="pontos_batidos_popup">
                    <div class="registro_ponto" v-for="(ponto, idx) in pontosDetalhes">
                        <div class="evento_ponto">
                            {{ nomeEvento(ponto, idx) }}:
                        </div>
                        <div class="evento_hora">
                            <input type="time" name="hora" class="hora hora-ponto hora-ponto-block" placeholder="hh:mm" maxlength="5" v-model="ponto.horario" :disabled="!editarPontosAble" />

                            <div class="btn btn-quadrado" @click="excluirPonto(ponto.id_pontos_batidos)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="popup_dia">
                <div class="content">
                    <h2>Consolidação do dia</h2>
                    <div>
                        <span>Tempo trabalhado: {{tempo_trabalhado}}</span>
                        <span> Tempo a trabalhar: 4h28</span>
                        <span> Intervalo cumprido: {{tempo_intervalo}}</span>
                    </div>
                    <table>
                        <tr v-for="(value, idx) in periodos" :class="classIntervalPop(idx)">
                            <td><span>{{value['periodo'][0]}}</span></td>
                            <td><span>{{value['periodo'][1]}}</span></td>
                            <td><span>{{value['tempo']}} {{idx % 2 === 0 ? "Período trabalhado" : "Perído afastado"}}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-content observacao">
            <div id="inputs_horarios">
                <div>
                    <label for="txt-data-obs">Data</label><br>
                    <input type="date" name="data" id="txt-data-obs" class="disable" :value="dataDetalhes" disabled>
                </div>
            </div>

            <br>

            <div id="acoes">
                <div class="btn btn_circular btn-grande" onclick="abrirFormObs()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                    </svg>
                </div>
            </div>

            <br>

            <h2>Observações</h2>

            <br>

            <div id="observacoes">
                <div class="observacao_item" v-for="(registro, idx) in obsDetalhes" v-if="obsDetalhes.length > 0">
                    <div class="dados">
                        <div>
                            <span><b>Evento: </b></span><span>{{nomeEvento(registro, idx)}}: {{registro.horario}} {{registro.abono ? "(Abonada)" : ""}}</span>
                        </div>
                        <div>
                            <span><b>{{getEventoTempo(registro)}}: </b></span><span>{{getEventoTempoValor(registro)}}</span>
                        </div>
                        <div>
                            <span><b>Observação: </b></span><br>
                            <span>{{registro.observacao}}</span>
                        </div>
                    </div>
                    <div class="acoes">
                        <div class="btn btn-quadrado" onclick="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                            </svg>
                        </div>
                        <div class="btn btn-quadrado" @click="excluirObservacao(registro.id_observacao)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay-form-obs">
    <div class="form-obs">
        <div class="header-acao">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" onclick="$('.overlay-form-obs').hide();"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </div>
        <div class="header">
            <div class="data-section">
                <label>Data</label>
                <input type="date" class="disable" id="data" class="disable" disabled>
            </div>
            <div class="abono-section">
                <input type="checkbox" id="abono">
                <label for="abono">Abono</label>
            </div>
        </div>

        <div class="time-entries">

        </div>

        <div class="option-section">
            <div class="option-group">
                <input type="radio" id="periodo" name="time-option" value="periodo" checked>
                <label for="periodo">Período</label>
            </div>
            <div class="option-group">
                <input type="radio" id="carga-horaria" name="time-option" value="carga-horaria">
                <label for="carga-horaria">Carga horária</label>
            </div>
        </div>

        <div class="time-range">
            <input type="time" id="time-start" value="00:00">
            <span class="hide">-</span>
            <input type="time" id="time-end" value="01:00" class="hide">
        </div>

        <div class="observation-section">
            <label>Observação</label>
            <textarea id="form-observacao"></textarea>
        </div>

        <div class="button-container">
            <button id="confirmar">Confirmar</button>
        </div>
    </div>
</div>

<?php $this->start("js"); ?>
<script>
    const {
        createApp,
        ref,
        computed,
        onMounted,
        onBeforeUnmount,
        watch,
    } = Vue;

    createApp({
        setup() {
            const dropdownEnable = ref(false);

            const dia_consolidacao = ref(null);
            const tempo_trabalhado = ref(null);
            const tempo_intervalo = ref(null);
            const periodos = ref([]);

            const currentDate = ref(new Date());
            const today = new Date();
            const dataHoje = `${today.getFullYear()}-${String(today.getMonth() + 1).padStart(2, "0")}-${String(today.getDate()).padStart(2, "0")}`;

            const pontosMes = ref([]);
            const pontosPorDia = ref({});

            const year = ref(currentDate.value.getFullYear());
            const month = ref(currentDate.value.getMonth());

            const monthDays = computed(() => {
                const firstDayOfMonth = new Date(year.value, month.value, 1).getDay();
                const lastDateOfMonth = new Date(year.value, month.value + 1, 0).getDate();
                const lastDateOfPrevMonth = new Date(year.value, month.value, 0).getDate();

                const dias = [];

                // Dias do mês anterior
                for (let i = firstDayOfMonth - 1; i >= 0; i--) {
                    dias.push({
                        dia: lastDateOfPrevMonth - i,
                        classe: 'prev-month',
                        data: formatarData(year.value, month.value - 1, lastDateOfPrevMonth - i)
                    });
                }

                // Dias do mês atual
                for (let i = 1; i <= lastDateOfMonth; i++) {
                    dias.push({
                        dia: i,
                        classe: 'current-month',
                        data: formatarData(year.value, month.value, i)
                    });
                }

                // Dias do próximo mês
                const total = dias.length;
                for (let i = 1; i <= 42 - total; i++) {
                    dias.push({
                        dia: i,
                        classe: 'next-month',
                        data: formatarData(year.value, month.value + 1, i)
                    });
                }

                return dias;
            });

            const semanas = computed(() => {
                const linhas = [];
                const dias = monthDays.value;
                for (let i = 0; i < dias.length; i += 7) {
                    linhas.push(dias.slice(i, i + 7));
                }
                return linhas;
            });

            const monthNames = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro",
            ];

            const monthYear = ref(null);

            const detalhesOpen = ref(false)
            const dataDetalhes = ref("2025-06-01")
            const pontosDetalhes = ref([]);
            let pontosDetalhesBackup = null;
            const obsDetalhes = ref([]);
            let pontosDoDiaEscolhido = ref([]);

            const editarPontosAble = ref(false);

            let popupTimeout;

            const pontoInput = ref(null);
            const intervaloChck = ref(false);

            function getEventoTempo(horario) {
                return horario.periodo_ini && horario.periodo_fim ? "Período" : "Carga horária";
            }

            function getEventoTempoValor(horario) {
                return horario.periodo_ini && horario.periodo_fim ? `${horario.periodo_ini} - ${horario.periodo_fim}` : horario.tempo;
            }

            function formatarData(ano, mes, dia) {
                const data = new Date(ano, mes, dia);
                return `${data.getFullYear()}-${String(data.getMonth() + 1).padStart(2, "0")}-${String(data.getDate()).padStart(2, "0")}`;
            }

            function nomeEvento(ponto, idx) {
                if (ponto.intervalo === 1) {
                    return idx % 2 === 1 ? "Intervalo" : "Ret. Inter.";
                }
                return idx % 2 === 0 ? "Entrada" : "Saída";
            }

            async function getPontos(mes, ano) {
                let callback = [];
                await $.ajax({
                    type: "POST",
                    url: "<?= url("/getPontos") ?>",
                    data: {
                        mes: mes,
                        ano: ano
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.hasOwnProperty("message") && response.message.indexOf("[ERRO]") === 0) {
                            show({
                                title: "Carregamento de Pontos",
                                msg: response.message
                            });

                            return false;
                        }


                        callback = response;
                    }
                });

                return callback;
            }

            async function carregarPontos() {
                const result = await getPontos(month.value, year.value);

                monthYear.value = `${monthNames[month.value]}/${year.value}`;

                pontosMes.value = result;
                const agrupado = {};
                for (const ponto of result) {
                    if (!agrupado[ponto.dia]) agrupado[ponto.dia] = [];
                    agrupado[ponto.dia].push(ponto);
                }

                // Ordena
                for (const dia in agrupado) {
                    agrupado[dia].sort((a, b) => a.horario.localeCompare(b.horario));
                }

                pontosPorDia.value = agrupado;
            }

            function trocarMes(param) {

                if (param === "-1") {
                    currentDate.value = new Date(
                        currentDate.value.getFullYear(),
                        currentDate.value.getMonth() - 1,
                        currentDate.value.getDate()
                    );
                } else if (param === "+1") {
                    currentDate.value = new Date(
                        currentDate.value.getFullYear(),
                        currentDate.value.getMonth() + 1,
                        currentDate.value.getDate()
                    );
                } else {
                    currentDate.value = new Date(
                        currentDate.value.getFullYear(),
                        param,
                        currentDate.value.getDate()
                    );
                }
            }

            function trocarAno(param) {
                if (param === "-1") {
                    currentDate.value = new Date(
                        currentDate.value.getFullYear() - 1,
                        currentDate.value.getMonth(),
                        currentDate.value.getDate()
                    );
                } else if (param === "+1") {
                    currentDate.value = new Date(
                        currentDate.value.getFullYear() + 1,
                        currentDate.value.getMonth(),
                        currentDate.value.getDate()
                    );
                }
            }

            async function calcularDia(date) {

                const pontos = getPontosDia(date);

                let callback = [];

                await $.ajax({
                    type: "POST",
                    url: "<?= url("/calcularDia") ?>",
                    data: {
                        pontos: pontos
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.hasOwnProperty("message") && response.message.indexOf("[ERRO]") === 0) {
                            show({
                                title: "Inclusão de usuário",
                                msg: response.message
                            });

                            return false;
                        }

                        callback = response;
                    }
                });

                return callback;
            }

            function getPontosDia(date) {
                return pontosMes.value.filter(item => {
                    const itemDate = new Date(item.dia);
                    const itemFormatted = itemDate.toISOString().split("T")[0]; // yyyy-mm-dd
                    return itemFormatted === date;
                });
            }

            function classIntervalPop(idx) {
                return idx % 2 !== 0 ? "afastamento" : '';
            }

            async function carregarDetalhesDia(dia, month_day, ano) {

                month_day = parseInt(month_day);
                month_day = month_day < 10 ? `0${month_day}` : month_day;

                dia = parseInt(dia);
                dia = dia < 10 ? `0${dia}` : dia;
                let date = `${ano}-${month_day}-${dia}`;

                let calculos = await calcularDia(date);

                dia_consolidacao.value = dia;
                tempo_trabalhado.value = calculos.tempo_trabalhado;
                tempo_intervalo.value = calculos.tempo_intervalo;
                periodos.value = calculos.periodos;
            }

            watch(currentDate, async () => {
                try {
                    year.value = currentDate.value.getFullYear();
                    month.value = currentDate.value.getMonth();
                    await carregarPontos();
                } catch (err) {
                    console.error("Erro ao carregar pontos:", err);
                }
            })

            onMounted(() => {
                carregarPontos();

                $("#calendar").on("mouseenter", ".dia_numero", function() {
                    clearTimeout(popupTimeout);

                    let dia = this.textContent.trim();
                    let month_day = currentDate.value.getMonth() + 1;
                    let ano = currentDate.value.getFullYear();

                    if ($(this).closest(".prev-month").length > 0) {
                        month_day--;
                        if (month_day == 0) {
                            month_day = 12
                            ano = currentDate.value.getFullYear() - 1;
                        }

                    } else if ($(this).closest(".next-month").length > 0) {
                        month_day++;
                        if (month_day == 13) {
                            month_day = 1
                            ano = currentDate.value.getFullYear() + 1;
                        }
                    }

                    carregarDetalhesDia(dia, month_day, ano)

                    const rect = this.getBoundingClientRect();
                    const popup_dia = $("#popup_dia");

                    popup_dia.css({
                        display: "block",
                        top: (rect.top + 20) + "px",
                        left: (rect.left + 15) + "px"
                    });
                });

                function esconderPopupComDelay() {
                    popupTimeout = setTimeout(() => {
                        $("#popup_dia").css("display", "none");
                    }, 100);
                }

                // Quando o mouse sai do número do dia
                $("#calendar").on("mouseleave", ".dia_numero", function() {
                    esconderPopupComDelay();
                });

                $("#popup_dia").on("mouseenter", function() {
                    clearTimeout(popupTimeout);
                });

                $("#popup_dia").on("mouseleave", function() {
                    esconderPopupComDelay();
                });
            });

            function isOpenDropdown() {
                dropdownEnable.value = !dropdownEnable.value;
            }

            function openTab(tabClass) {
                // Remove active class de todas as tabs
                $('.tab').removeClass('active');
                $('.tab-content').removeClass('active');

                // Adiciona active à tab clicada e seu conteúdo
                $(`.tab[onclick*="${tabClass}"]`).addClass('active');
                $(`.${tabClass}`).addClass('active');

                pontosDetalhes.value.sort((a, b) => a.horario.localeCompare(b.horario));

                // pontosDetalhes.value = pontosDoDiaEscolhido.value
                obsDetalhes.value = pontosDetalhes.value.filter(item => item.observacao)

            }

            function fecharPopup() {
                detalhesOpen.value = false;
            }

            async function abrirPopup(aba, date) {

                pontosDetalhes.value = JSON.parse(JSON.stringify(getPontosDia(date)));
                detalhesOpen.value = true;
                dataDetalhes.value = date;

                await $.ajax({
                    type: "POST",
                    url: "<?= url("/getDetalhes") ?>",
                    data: {
                        date: date
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.hasOwnProperty("message") && response.message.indexOf("[ERRO]") === 0) {
                            show({
                                title: "Carregamento de Detalhes",
                                msg: response.message
                            });

                            return false;
                        }

                        response.forEach((ponto) => {
                            const founded = pontosDetalhes.value.filter((pontoReq) => pontoReq.id_pontos_batidos === ponto.id_pontos_batidos);

                            if (!founded) pontosDetalhes.value.push(ponto);

                        });
                    }
                });

                const brokenDate = date.split("-")

                let dia = brokenDate[2];
                let month_day = brokenDate[1];
                let ano = brokenDate[0];

                carregarDetalhesDia(dia, month_day, ano);

                openTab(aba);
            }

            function editarPontos(acao = null) {
                editarPontosAble.value = !editarPontosAble.value;

                if (editarPontosAble.value && acao === "editar") {
                    pontosDetalhesBackup = JSON.parse(JSON.stringify(pontosDetalhes.value));
                    $(".hora-ponto").removeClass("hora-ponto-block");
                    $("#btn-fechar-editar").css({
                        "display": "flex"
                    });

                    $("#registros #acoes").css({
                        "margin-right": "-1px"
                    })
                } else {

                    if (acao === "editar") {
                        // SALVAR INFORMAÇÔES
                        const updatedPontos = pontosDetalhes.value.filter((ponto, idx) => ponto.horario != pontosDetalhesBackup[idx].horario);

                        let dia_ponts = getPontosDia(dataDetalhes.value);

                        pontosDetalhesBackup = null

                        $.ajax({
                            type: "POST",
                            url: "<?= url("/setPontos") ?>",
                            data: {
                                updatedPontos: updatedPontos
                            },
                            dataType: "json",
                            success: function(response) {

                                if (response.hasOwnProperty("message") && response.message.indexOf("[ERRO]") === 0) {
                                    show({
                                        title: "Carregamento de Pontos",
                                        msg: response.message
                                    });

                                    return false;
                                }

                                dia_ponts.forEach((ponto, idx) => {
                                    if (idx < updatedPontos.length && ponto.id_pontos_batidos === updatedPontos[idx].id_pontos_batidos) ponto.horario = updatedPontos[idx].horario
                                });
                            }
                        });
                    } else {
                        dia_ponts = JSON.parse(JSON.stringify(pontosDetalhes.value));

                        pontosDetalhes.value.splice(0, pontosDetalhes.value.length, ...JSON.parse(JSON.stringify(pontosDetalhesBackup)));
                        pontosDetalhesBackup = null
                    }

                    $(".hora-ponto").addClass("hora-ponto-block");
                    $("#registros #acoes").css({
                        "margin-right": "52px"
                    })

                    $("#btn-fechar-editar").css({
                        "display": "none"
                    });
                }

            }

            function coletarHora(e) {
                pontoInput.value = e.target.value;
            }

            function adicionarPonto() {

                const founded = pontosDetalhes.value.find((ponto) => ponto.horario === pontoInput.value);
                if (pontoInput.value && !founded) {

                    let novo_ponto = {
                        dia: dataDetalhes.value,
                        horario: pontoInput.value,
                        intervalo: intervaloChck.value
                    }

                    $.ajax({
                        type: "POST",
                        url: "<?= url("/setPontos") ?>",
                        data: {
                            pontosList: [novo_ponto]
                        },
                        dataType: "json",
                        success: function(response) {

                            if (response.hasOwnProperty("message") && response.message.indexOf("[ERRO]") === 0) {
                                show({
                                    title: "Carregamento de Pontos",
                                    msg: response.message
                                });

                                return false;
                            }

                            novo_ponto.id_pontos_batidos = response.new_id;

                            pontosPorDia.value[`${novo_ponto.dia}`].push(novo_ponto);
                            pontosPorDia.value[`${novo_ponto.dia}`].sort((itemA, itemB) => itemA.horario.localeCompare(itemB.horario));

                            pontosDetalhes.value.push(novo_ponto);
                            pontosDetalhes.value.sort((itemA, itemB) => itemA.horario.localeCompare(itemB.horario));

                            pontoInput.value = "";
                        }
                    });

                } else {
                    alert("Não há hora para salvar");
                }
            }

            function excluirPonto(id_ponto) {
                pontosDetalhes.value = pontosDetalhes.value.filter((ponto) => ponto.id_pontos_batidos !== id_ponto);

            }

            return {
                dropdownEnable,
                classIntervalPop,
                isOpenDropdown,
                semanas,
                trocarMes,
                trocarAno,
                pontosPorDia,
                abrirPopup,
                nomeEvento,
                dataHoje,
                monthYear,
                year,
                dia_consolidacao,
                tempo_trabalhado,
                tempo_intervalo,
                periodos,
                detalhesOpen,
                dataDetalhes,
                pontosDetalhes,
                obsDetalhes,
                getEventoTempo,
                getEventoTempoValor,
                fecharPopup,
                openTab,
                editarPontos,
                pontoInput,
                intervaloChck,
                adicionarPonto,
                coletarHora,
                excluirPonto,
                editarPontosAble
            };
        },
    }).mount("#app");
</script>
<script>
    let currentDate = new Date();
    const today = new Date();
    let pontosMes = [];
    let diaEscolhido;


    function abrirFormObs() {
        let html = "";

        $("#data").val(diaEscolhido);

        pontosDoDiaEscolhido.value.forEach((ponto, idx) => {
            let evento = "Entrada";

            if (ponto.intervalo === 1) {
                evento = idx % 2 === 1 ? "Intervalo" : "Ret. Inter.";
            } else {
                evento = idx % 2 === 0 ? "Entrada" : "Saída";
            }
            html += `
            <div class="time-row">
                <label>${evento}</label>
                <span class="time-display">${ponto.horario}</span>
                <input type="radio" name="selected-time" value="${ponto.id}">
            </div>
        `;
        });

        $(".time-entries").html(html);

        $('.overlay-form-obs').show();
    }

    // Função para obter os dados do formulário
    function getFormData() {
        // Encontrar o horário selecionado
        let selectedTime = $("input[name='selected-time']").filter(":checked").val() || "";

        // Encontrar a opção de período selecionada
        let timeOption = $("input[name='time-option']").filter(":checked").val() || "";

        const isCargaHoraria = $("#carga-horaria").is(":checked");

        return {
            data: $("#data").val(),
            abono: $("#abono").is(":checked"),
            horarioSelecionado: selectedTime,
            opcaoTempo: timeOption,
            horaInicio: $("#time-start").val(),
            horaFim: !isCargaHoraria ? $("#time-end").val() : null,
            observacao: $("#form-observacao").val()
        };
    }

    // Função para atualizar a visibilidade do segundo campo de hora
    function updateTimeRangeVisibility() {
        const isCargaHoraria = $("#carga-horaria").is(":checked");
        const elementsToHide = $('.hide');

        elementsToHide.each(function() {
            if (isCargaHoraria) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    }

    $(document).ready(function() {

        $('.hora').mask('00:00');


        // Adicionar listener para os radio buttons de opção de tempo
        $("input[name='time-option']").on('change', updateTimeRangeVisibility);

        // Executar na inicialização para garantir o estado correto
        updateTimeRangeVisibility();

        // Evento de clique no botão confirmar
        $("#confirmar").on("click", function() {
            const formData = getFormData();

            console.log("Dados do formulário:", formData);
            alert("Formulário enviado! Verifique o console para ver os dados.");
        });
    });

    // renderCalendar();
</script>
<?php $this->end("js"); ?>