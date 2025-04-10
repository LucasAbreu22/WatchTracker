<?php $this->layout("_theme", ["title" => $title]); ?>

<div id="cabecalho">
    <div id="mes_nav">
        <button id="prev">◄</button>
        <h2 id="monthYear">Junho/2025</h2>
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
    <tbody id="calendar">
        <tr class="dia_linha">
            <td>
                <div class="dia_card dia_selecionado">
                    <div class="acoes">
                        <h1>1</h1>
                        <div class="btn_add_ponto" href="#">
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

<div id="popup_dia">

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

    function renderCalendar() {

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
        days.forEach((d) => {
            if (index === 1) {
                card_day += "<tr>";
            }

            card_day += `<td>
                <div class="dia_card ${d.class}">
                    <div class="acoes">
                        <h1 class="dia_numero">${d.day}</h1>
                        <div class="btn_add_ponto" href="#">
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
                        <div>
                            <span>Entrada:</span>
                            <span>09:00</span>
                        </div>
                        <div>
                            <span>Intervalo:</span>
                            <span>13:00</span>
                        </div>
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
            </td>`

            if (index === 7) {
                card_day += "</tr>";

                $("#calendar").append(card_day);
                card_day = "";
                index = 0;
            }
            index++
        });
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

    $(document).ready(function() {

        $("#monthYear").on("click", function(event) {
            openDropdown(event);
            setupMonthsDropdown();
        });

        $(".dia_numero").on("mouseenter", function() {
            const rect = this.getBoundingClientRect();
            const popup_dia = $("#popup_dia");

            const html = `    
            <div class="content">
                <h2>Consolidação do dia ${this.innerHTML}</h2>

                <div>
                    <span>Tempo trabalhado: 03h32</span>
                    <span> Tempo a trabalhar: 04h28</span>
                    <span> Intervalo cumprido: 13:00 - 14:00</span>
                </div>
                <table>
                    <tr>
                        <td><span>10:20</span></td>
                        <td><span>13:06</span></td>
                        <td><span>01h46 Período trabalho</span></td>
                    </tr>
                    <tr>
                        <td><span>10:20</span></td>
                        <td><span>13:06</span></td>
                        <td><span>01h46 Período trabalho</span></td>
                    </tr>
                    <tr>
                        <td><span>10:20</span></td>
                        <td><span>13:06</span></td>
                        <td><span>01h46 Período trabalho</span></td>
                    </tr>
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

        $(".dia_numero").on("mouseleave", function() {
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

    });

    renderCalendar();
</script>
<?php $this->end("js"); ?>