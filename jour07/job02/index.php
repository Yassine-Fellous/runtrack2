<?php
        if (isset($_POST["reset"])) {
            unset($_COOKIE['nbvisits']);
        }
    
        if (!isset($_COOKIE['nbvisits'])) $_COOKIE['nbvisits'] = 0;
            $visits = $_COOKIE['nbvisits'] + 1;
            setcookie('nbvisits',$visits,time()+3600*24*365);

            echo $visits;

?>

<form action="" method="POST">
    <button type="submit" name="reset">reset</button>
</form>