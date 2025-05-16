function mostrarLoading() {
  $("#background-loader").show();
  $("#loader").addClass("loader");
}

function ocultarLoading() {
  $("#background-loader").hide();
  $("#loader").removeClass("loader");
}

function validarEmail(email) {
  return new Promise((resolve) => {
    usuario = email.substring(0, email.indexOf("@"));
    dominio = email.substring(email.indexOf("@") + 1, email.length);

    if (
      usuario.length >= 1 &&
      dominio.length >= 3 &&
      usuario.search("@") == -1 &&
      dominio.search("@") == -1 &&
      usuario.search(" ") == -1 &&
      dominio.search(" ") == -1 &&
      dominio.search(".") != -1 &&
      dominio.indexOf(".") >= 1 &&
      dominio.lastIndexOf(".") < dominio.length - 1
    ) {
      resolve("");
    } else {
      alert("E-mail inválido");
      ocultarLoading();
      return false;
    }
  });
}

function validarCPF(cpf) {
  return new Promise((resolve) => {
    var Soma;
    var Resto;
    const cpfLimpo = cpf.replace(/[.-]/g, "");

    Soma = 0;
    if (cpfLimpo == "00000000000") {
      alert("CPF inválido");
      ocultarLoading();
      return false;
    }

    for (i = 1; i <= 9; i++)
      Soma = Soma + parseInt(cpfLimpo.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if (Resto == 10 || Resto == 11) Resto = 0;
    if (Resto != parseInt(cpfLimpo.substring(9, 10))) {
      alert("CPF inválido");
      ocultarLoading();
      return false;
    }

    Soma = 0;
    for (i = 1; i <= 10; i++)
      Soma = Soma + parseInt(cpfLimpo.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if (Resto == 10 || Resto == 11) Resto = 0;
    if (Resto != parseInt(cpfLimpo.substring(10, 11))) {
      alert("CPF inválido");
      ocultarLoading();
      return false;
    }
    resolve("");
  });
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
  $(".CPF").mask("999.999.999-99");
  $("input").attr("autocomplete", "off");
});
