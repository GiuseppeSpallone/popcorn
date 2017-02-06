<?php
$print_class = 'class="active"';
?>

<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Project Name</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li <?= ($selector == 0)?$print_class:'' ?> ><a href="index.php">Home</a></li>
                    <li <?= ($selector == 1)?$print_class:'' ?>><a href="programmazione.php">Programmazione</a></li>
                    <li <?= ($selector == 2)?$print_class:'' ?>><a href="prezzi.php">Prezzi e Sale</a></li>
                    <li <?= ($selector == 3)?$print_class:'' ?>><a href="contatti.php">Contatti</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="fat-menu" class="dropdown"> <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Il mio account <span class="caret"></span> </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li <?= ($selector == 4)?$print_class:'' ?>><a href="accesso_registrazione.php">Accedi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br> <br> <br>