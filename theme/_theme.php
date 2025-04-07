<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/x-icon" href="<?= url("/theme/assets/img/icon-SAAGI.png"); ?>">

    <script src="<?= url("/theme/assets/js/jquery.js"); ?>"></script>
    <script src="<?= url("/theme/assets/js/modais.js"); ?>"></script>

    <script src="<?= url("/theme/assets/js/select2.js") ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= url("/theme/assets/css/select2.css") ?>">

    <script src="<?= url("/theme/assets/plugins/xModal/xModal.js") ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= url("/theme/assets/plugins/xModal/xModal.css") ?>">

    <link rel="stylesheet" href="<?= url("/theme/assets/css/styles.css"); ?>" />
</head>

<body>
    <main>
        <div class="content">
            <?= $this->section("content"); ?>
        </div>
    </main>

    <div id="background-loader"></div>
    <div id="loader"></div>



</body>
<script>
    $(document).ready(function() {
        $('.select2').each(function() {
            $(this).select2();

            let maxLength = 0;
            let dropdown = $(this);

            // Encontra a opção mais longa
            dropdown.find('option').each(function() {
                let textLength = $(this).text().length;
                if (textLength > maxLength) {
                    maxLength = textLength;
                }
            });

            // Define a largura baseada no número de caracteres (multiplica por um fator ajustável)
            let width = maxLength * 7 + 30; // Ajuste o multiplicador conforme necessário

            // Inicializa o select2 com a largura dinâmica
            dropdown.select2({
                width: width + "px"
            });
        });
    });
</script>
<?= $this->section("js"); ?>
<script src="<?= url("/theme/assets/js/index.js") ?>"></script>

</html>