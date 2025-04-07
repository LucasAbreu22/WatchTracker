function mostrarLoading() {
  $("#background-loader").show();
  $("#loader").addClass("loader");
}

function ocultarLoading() {
  $("#background-loader").hide();
  $("#loader").removeClass("loader");
}

$(document).ready(function () {
  $(".select2-selection").on("keydown", function (event) {
    let teclasBloqueadas = [
      "Shift",
      "Control",
      "Alt",
      "Meta",
      "CapsLock",
      "Tab",
      "Enter",
      "Escape",
      "ArrowUp",
      "ArrowDown",
      "ArrowLeft",
      "ArrowRight",
      "Home",
      "End",
      "PageUp",
      "PageDown",
      "Insert",
      "Delete",
    ];

    // Se a tecla pressionada estiver na lista, ignoramos
    if (!teclasBloqueadas.includes(event.key)) {
      let index = $(".select2-selection").index(this); // Obtém o índice do Select2 focado
      $("select").eq(index).select2("open"); // Abre o dropdown do Select2 correspondente
      $(".select2-search__field").val(event.key);
    }
  });
});
