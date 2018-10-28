<?php
    spl_autoload_register(
        function ($classe)
        {
            $classname = str_replace ("\\","/", $classe);
            $filename = "$classname.php";
            echo "Pesquisando por $filename<br>";
            if (file_exists($filename))
                include_once $filename;
        }
    );