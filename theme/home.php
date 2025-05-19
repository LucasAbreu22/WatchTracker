<?php $this->layout("_theme", ["title" => $title]); ?>

<div id="cabecalho">
    <div id="mes_nav">
        <button id="prev">◄</button>
        <h1 id="monthYear">Junho/2025</h1>
        <button id="next">►</button>

    </div>
    <div class="dropdown" id="monthDropdown">
        <div class="year-controls">
            <button id="prevYear">◄</button>
            <h2 id="dropdownYear"></h2>
            <button id="nextYear">►</button>
        </div>
        <div id="monthsList"></div>
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
    </thead>
    <tbody id="calendar">
        <tr class="dia_linha">
            <td>
                <div class="dia_card dia_selecionado">
                    <div class="acoes">
                        <h1>1</h1>
                        <div class="btn_circular" href="#">
                            <span> + </span>
                        </div>
                        <div class="btn_add_observacao" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z" />
                            </svg>
                        </div>
                    </div>
                    <div class="pontos_batidos">
                        <div>
                            <span>Entrada:</span>
                            <span>09:00</span>
                        </div>
                        <div>
                            <span>Intervalo:</span>
                            <span>13:00</span>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="dia_card dia_atual"></div>
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

<div id="popup_dia"></div>

<div class="overlay">
    <div class="popup">
        <div class="tabs">
            <div>
                <div class="tab active" onclick="openTab('horarios')">Horários</div>
                <div class="tab" onclick="openTab('observacao')">Observação</div>
            </div>
            <div onclick="fecharPopup()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </div>
        </div>

        <div class="tab-content active" id="horarios">
            <div id="inputs_horarios">
                <div>
                    <label for="txt-data">Data</label><br>
                    <input type="date" name="data" id="txt-data" class="disable" value="2025-04-22" disabled>
                </div>
                <div>
                    <label for="txt-hora">Hora</label><br>
                    <input type="text" name="hora" id="txt-hora" class="hora" placeholder="HH:MM" maxlength="5">
                </div>
                <div>
                    <input type="checkbox" name="" id="chck-intervalo">
                    <label for="chck-intervalo">Intervalo</label>
                </div>
            </div>
            <br>
            <div id="acoes">
                <div class="btn_circular btn-grande">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                    </svg>
                </div>
                <div class="btn_circular btn-grande">
                    <span> + </span>
                </div>
            </div>
            <br>
            <div id="pontos_batidos_popup">

            </div>
        </div>

        <div class="tab-content" id="observacao">
            <div id="inputs_horarios">
                <div>
                    <label for="txt-data-obs">Data</label><br>
                    <input type="date" name="data" id="txt-data-obs" class="disable" value="2025-04-22" disabled>
                </div>
            </div>

            <br>

            <div id="acoes">
                <div class="btn_circular btn-grande" onclick="abrirFormObs()">
                    <span> + </span>
                </div>
            </div>

            <br>

            <h2>Observações</h2>

            <br>

            <div id="observacoes">
                <div class="observacao">
                    <div class="dados">
                        <div>
                            <span><b>Evento: </b></span><span>Entrada: 09:00 (Abonada)</span>
                        </div>
                        <div>
                            <span><b>Período: </b></span><span>08:00 - 09:00</span>
                        </div>
                        <div>
                            <span><b>Observação: </b></span><br>
                            <span>Consulta médica</span>

                        </div>
                    </div>
                    <div class="acoes">
                        <div class="btn_circular btn-lixeira" onclick="excluirPonto()">
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

    let currentDate = new Date();
    const today = new Date();
    let pontosMes = [];
    let diaEscolhido;
    let pontosDoDiaEscolhido;

    async function renderCalendar() {
        mostrarLoading();

        const $calendar = $("#calendar");
        const $monthYear = $("#monthYear");
        const $dropdownYear = $("#dropdownYear");

        let year = currentDate.getFullYear();
        let month = currentDate.getMonth();

        monthYear.textContent = `${monthNames[month]}/${year}`;
        dropdownYear.textContent = year;

        calendar.innerHTML = "";

        let firstDayOfMonth = new Date(year, month, 1).getDay();
        let lastDateOfMonth = new Date(year, month + 1, 0).getDate();
        let lastDateOfPrevMonth = new Date(year, month, 0).getDate();

        let days = [];

        for (let i = firstDayOfMonth - 1; i >= 0; i--) {
            days.push({
                day: lastDateOfPrevMonth - i,
                class: "prev-month"
            });
        }

        for (let i = 1; i <= lastDateOfMonth; i++) {
            days.push({
                day: i,
                class: "current-month"
            });
        }

        let nextMonthDays = 42 - days.length;
        for (let i = 1; i <= nextMonthDays; i++) {
            days.push({
                day: i,
                class: "next-month"
            });
        }

        let index = 1;

        let card_day = ""

        pontosMes = await getPontos(month, year);

        let data_atual = `${today.getFullYear()}-${today.getMonth()}-${today.getDate()}`;

        days.forEach((d) => {
            let realMonth = month;
            let realYear = year;

            if (d.class === "prev-month") {
                realMonth = month - 1;
                if (realMonth < 0) {
                    realMonth = 11;
                    realYear -= 1;
                }
            } else if (d.class === "next-month") {
                realMonth = month + 1;
                if (realMonth > 11) {
                    realMonth = 0;
                    realYear += 1;
                }
            }

            // Formata a data no formato YYYY-MM-DD
            const formattedDate = `${realYear}-${String(realMonth + 1).padStart(2, '0')}-${String(d.day).padStart(2, '0')}`;

            if (index === 1) {
                card_day += "<tr>";
            }

            const data_render = d.class === "current-month" ? `${year}-${month}-${d.day}` : "";

            if (currentDate.getDate)
                card_day += `<td>
                    <div class="dia_card ${d.class} ${data_render === data_atual ? "dia_atual" : ""}">
                        <div class="acoes">
                            <h1 class="dia_numero">${d.day}</h1>
                            <div class="btn_circular" onclick="abrirPopup('horarios', '${formattedDate}')">
                                <span> + </span>
                            </div>
                            <div class="btn_add_observacao" onclick="abrirPopup('observacao', '${formattedDate}')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z" />
                                </svg>
                            </div>
                        </div>
                        <div class="pontos_batidos">`;

            if (pontosMes.length > 0) {
                // Agrupa os pontos por dia (formato YYYY-MM-DD)
                const pontosPorDia = {};
                pontosMes.forEach(ponto => {
                    if (!pontosPorDia[ponto.dia]) {
                        pontosPorDia[ponto.dia] = [];
                    }
                    pontosPorDia[ponto.dia].push(ponto);
                });

                // Determina o mês e ano reais do dia atual (caso seja de outro mês)
                let realMonth = month;
                let realYear = year;

                if (d.class === "prev-month") {
                    realMonth = month - 1;
                    if (realMonth < 0) {
                        realMonth = 11;
                        realYear -= 1;
                    }
                } else if (d.class === "next-month") {
                    realMonth = month + 1;
                    if (realMonth > 11) {
                        realMonth = 0;
                        realYear += 1;
                    }
                }

                // Formata corretamente a data do dia atual
                const diaFormatado = `${realYear}-${String(realMonth + 1).padStart(2, "0")}-${String(d.day).padStart(2, "0")}`;
                const pontosDoDia = pontosPorDia[diaFormatado];

                if (pontosDoDia && pontosDoDia.length > 0) {
                    // Ordena os pontos do dia por horário
                    pontosDoDia.sort((a, b) => a.horario.localeCompare(b.horario));

                    pontosDoDia.forEach((ponto, idx) => {
                        let evento = "Entrada";

                        if (ponto.intervalo === 1) {
                            evento = idx % 2 === 1 ? "Intervalo" : "Ret. Inter.";
                        } else {
                            evento = idx % 2 === 0 ? "Entrada" : "Saída";
                        }

                        card_day += `
                <div>
                    <span>${evento}:</span>
                    <span class="horario">${ponto.horario}</span>
                </div>`;
                    });
                }
            }


            card_day += `
                    </div>
                </div>
            </td>`

            if (index === 7) {
                card_day += "</tr>";

                $("#calendar").append(card_day);
                card_day = "";
                index = 0;
            }
            index++
        });

        setTimeout(() => {

            ocultarLoading();
        }, 300);
    }

    function openDropdown(event) {
        const $dropdown = $("#monthDropdown");
        const $monthYear = $("#monthYear");

        const offset = $monthYear.offset();
        $dropdown.css({
            display: "block",
            top: offset.top + 50 + "px",
            left: offset.left - 60 + "px"
        });
    }

    function closeDropdown(event) {
        const $dropdown = $("#monthDropdown");
        if (
            !$dropdown.is(event.target) &&
            $dropdown.has(event.target).length === 0 &&
            event.target.id !== "monthYear"
        ) {
            $dropdown.hide();
        }
    }

    function setupMonthsDropdown() {
        const $monthsList = $("#monthsList").empty();

        monthNames.forEach((month, index) => {
            $("<div>")
                .addClass("month-option")
                .text(month)
                .on("click", () => {
                    $("#monthDropdown").hide();
                    currentDate.setMonth(index);
                    renderCalendar();
                })
                .appendTo($monthsList);
        });
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

    function getPontosDia(date) {
        return pontosMes.filter(item => {
            const itemDate = new Date(item.dia);
            const itemFormatted = itemDate.toISOString().split("T")[0]; // yyyy-mm-dd
            return itemFormatted === date;
        });
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

    function openTab(tabId) {
        // Remove active class de todas as tabs
        $('.tab').removeClass('active');
        $('.tab-content').removeClass('active');

        // Adiciona active à tab clicada e seu conteúdo
        $(`.tab[onclick*="${tabId}"]`).addClass('active');
        $(`#${tabId}`).addClass('active');

        if (pontosDoDiaEscolhido && pontosDoDiaEscolhido.length > 0) {
            let htmlObsrvacao = "";
            let htmlPonto = "";
            // Ordena os pontos do dia por horário
            pontosDoDiaEscolhido.sort((a, b) => a.horario.localeCompare(b.horario));

            pontosDoDiaEscolhido.forEach((ponto, idx) => {
                let evento = "Entrada";

                if (ponto.intervalo === 1) {
                    evento = idx % 2 === 1 ? "Intervalo" : "Ret. Inter.";
                } else {
                    evento = idx % 2 === 0 ? "Entrada" : "Saída";
                }

                htmlPonto += `
                    <div class="registro_ponto">
                        <div class="evento_ponto">
                            ${evento}:
                        </div>
                        <div class="evento_hora">
                            ${ponto.horario}
                            <div class="btn_circular btn-lixeira" onclick="excluirPonto(${ponto.id_ponto})">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span></span>
                        <span class="horario"></span>
                    </div>`;

                if (ponto.id_observacao) {

                    let eventoTempo = ponto.periodo_ini && ponto.periodo_fim ? "Período" : "Carga horária";
                    let eventoTempoValor = ponto.periodo_ini && ponto.periodo_fim ? `${ponto.periodo_ini} - ${ponto.periodo_fim}` : ponto.tempo;
                    let abonoText = ponto.abono ? "(Abonada)" : "";

                    htmlObsrvacao += `
                    <div class="observacao">
                        <div class="dados">
                            <div>
                                <span><b>Evento: </b></span><span>${evento}: ${ponto.horario} ${abonoText}</span>
                            </div>
                            <div>
                                <span><b>${eventoTempo}: </b></span><span>${eventoTempoValor}</span>
                            </div>
                            <div>
                                <span><b>Observação: </b></span><br>
                                <span>${ponto.observacao}</span>
                            </div>
                        </div>
                        <div class="acoes">
                            <div class="btn_circular btn-lixeira" onclick="excluirObservacao(${ponto.id_observacao})">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    `;
                }

            });

            $("#observacoes").html(htmlObsrvacao);
            $("#pontos_batidos_popup").html(htmlPonto);
        }
    }

    function fecharPopup() {
        $(".overlay").hide();
        $(".popup").hide();

        $("#pontos_batidos_popup").html("");
        $("#observacoes").html("");
    }

    async function abrirPopup(aba, date) {

        diaEscolhido = date;

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

                pontosDoDiaEscolhido = response;
            }
        });

        $(".overlay").show();
        $(".popup").show();

        $("#txt-data").val(diaEscolhido);
        $("#txt-data-obs").val(diaEscolhido);

        openTab(aba);
    }

    function abrirFormObs() {
        let html = "";

        $("#data").val(diaEscolhido);

        pontosDoDiaEscolhido.forEach((ponto, idx) => {
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

        $("#monthYear").on("click", function(event) {
            openDropdown(event);
            setupMonthsDropdown();
        });

        $("#calendar").on("mouseenter", ".dia_numero", async function() {
            let dia = this.textContent.trim();
            let month_day = currentDate.getMonth() + 1;
            let ano = currentDate.getFullYear();

            if ($(this).closest(".prev-month").length > 0) {
                month_day--;
                if (month_day == 0) {
                    month_day = 12
                    ano = currentDate.getFullYear() - 1;
                }

            } else if ($(this).closest(".next-month").length > 0) {
                month_day++;
                if (month_day == 13) {
                    month_day = 1
                    ano = currentDate.getFullYear() + 1;
                }
            }

            month_day = month_day < 10 ? `0${month_day}` : month_day;
            dia = dia < 10 ? `0${dia}` : dia;

            let date = `${ano}-${month_day}-${dia}`;

            let horarios = await calcularDia(date);

            const rect = this.getBoundingClientRect();
            const popup_dia = $("#popup_dia");

            let html = `    
            <div class="content">
                <h2>Consolidação do dia ${ this.textContent.trim()}</h2>
                <div>`;

            html += `
                    <span>Tempo trabalhado: ${horarios.tempo_trabalhado}</span>
                    <span> Tempo a trabalhar: 4h28</span>
                    <span> Intervalo cumprido: ${horarios.tempo_intervalo}</span>
                </div>
                <table>
            `;

            horarios.periodos.forEach((row, idx) => {
                let evento = idx % 2 === 0 ? "Período trabalhado" : "Perído afastado";
                const clss = evento === "Perído afastado" ? "afastamento" : "";
                html += `
                <tr class=${clss}>
                    <td><span>${row.periodo[0]}</span></td>
                    <td><span>${row.periodo[1]}</span></td>
                    <td><span>${row.tempo} ${evento}</span></td>
                </tr>`;
            });

            html += `
                </table>
            </div>`;

            popup_dia.html(html);
            popup_dia.css({
                display: "block",
                position: "absolute",
                top: (rect.top + 20) + "px",
                left: (rect.left + 15) + "px"
            });
        });

        $("#calendar").on("mouseleave", [".dia_numero"], function() {
            const popup_dia = $("#popup_dia");

            const html = "";
            popup_dia.html(html);
            popup_dia.css({
                display: "none",
            });
        });

        $("#prev").on("click", function() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });

        $("#next").on("click", function() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });

        $("#prevYear").on("click", function() {
            currentDate.setFullYear(currentDate.getFullYear() - 1);
            renderCalendar();
        });

        $("#nextYear").on("click", function() {
            currentDate.setFullYear(currentDate.getFullYear() + 1);
            renderCalendar();
        });

        $(document).on("wheel", function(event) {
            if ($("#monthDropdown").css("display") === "block") {
                let delta = event.originalEvent.deltaY > 0 ? 1 : -1;
                currentDate.setFullYear(currentDate.getFullYear() + delta);
                renderCalendar();
            }
        });

        $(document).on("click", closeDropdown);

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

    renderCalendar();
</script>
<?php $this->end("js"); ?>