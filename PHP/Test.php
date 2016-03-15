<?php
    ob_start();
       phpinfo();
       $info = ob_get_clean();
    //  ob_end_clean();
?>