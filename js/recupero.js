$(document).ready(function () {



    $('#nuova-password, #conferma-nuova-password').on('input', function () {
        var inputpsw = $('#nuova-password');
        var inputpsw_conf = $('#conferma-nuova-password');
        var is_psw = inputpsw.val();
        var is_inputpsw = inputpsw_conf.val();
        if ((is_psw) && (is_inputpsw) && (is_psw == is_inputpsw)) {
            $("div#errorDismatch").removeClass("to_show").addClass("no_show");
        } else {
            $("div#errorDismatch").removeClass("no_show").addClass("to_show");
        }
    });

    $("form#recupero-form").on("submit", function () {
        var data = $(this).serialize();
        data = data + "&rec=" + username;
        $.ajax({
            type: "POST",
            url: "check/aggiorna_psw.php?",
            data: data,
            dataType: "html",
            success: function (esito) {
                if (esito == "ok") {
                    window.location.href = "index.php";
                } else if (esito == "Errore aggiornamento") {
                    $("div#errorAgg").removeClass("no_show").addClass("to_show");
                } else if (esito == "Errore nessuna email inviata.") {
                    $("div#errorEmail").removeClass("no_show").addClass("to_show");

                }
            },
            error: function (xhr, status, error) {

                alert("male");
            }

        });
        return false;
    });
});


