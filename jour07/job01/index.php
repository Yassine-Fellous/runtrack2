<form action="" method="POST">
    <button type="sub" name="sub">reset</button>
    </form>



<?php

    session_start();
    if (isset($_POST["sub"])) {
        session_destroy();
    }
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    }
    else {
        $_SESSION['nbvisites']++;
        
    }
    echo "nombre de visites sur le site : $_SESSION[nbvisites]";
    

?>
