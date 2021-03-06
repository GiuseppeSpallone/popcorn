<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'confirm-password');

//Controllo presenza campi
/*if (!$username || !$email || !$password || !$password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=campi_vuoti");
    die();
}*/

//Controllo coincidenza password
/*if ($password != $password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=psw_non_coincidenti");
    die();
}*/

//Cripta la password
$password = md5($password);

//Controllo utente
$controlloUsername = $db_instance->select(array('username'), 'utente', "username = '$username'");
$numUsername = mysqli_num_rows($controlloUsername);

$controlloMail = $db_instance->select(array('email'), 'utente', "email = '$email'");
$numMail = mysqli_num_rows($controlloMail);

if ($numUsername != 0) {
    echo "Username esistente";
} else if ($numMail != 0) {
    echo "Email esistente";
} else {
    $result = $db_instance->insert('utente', array('username', 'email', 'password'), array($username, $email, $password));

    if (!$result) {
        echo "No result";
    } else {
        $oggetto = "Registrazione Popcorn";

        $corpo = '<html>
                  <head>
  
                  </head>
                  <body>
                      <img src="https://cldup.com/1AYvlq29Z3.png">
                      <h1> Benvenuto in Popcorn '. $username . '</h1>
                  </body>
                  </html>';
        $html = "MIME-Version: 1.0\r\n";
        $html .= "Content-type: text/html; charset=iso-8859-1\r\n";

        if (mail($email, $oggetto, $corpo, $html)) {
            //echo "Messaggio inviato con successo.";
            echo "ok";
            // header("location: ../index.php");
            //echo "Inserimenti effettuati correttamente.";
            //creare messaggio di benvenuto
        } else {
            echo "Email non inviata";
        }

    }
}


$db_instance->connection->close();
?>
