<?php
session_start();
require_once("logica-usuario.php");

function mostraAlerta($tipo) {
     if(isset($_SESSION[$tipo])) {
?>
        <p style="text-align: center;" class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
    }
}
?>
