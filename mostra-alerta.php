<?php
session_start();
function mostraAlerta($tipo) {
     if(isset($_SESSION[$tipo])) {
?>
    <p style="text-align: center;" class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
     }
 }
