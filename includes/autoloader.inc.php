<?php

    session_start();    // session start for all class

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){

        $path = $_SERVER["DOCUMENT_ROOT"]."/includes/classes/";
        $exe = ".class.php";
        $filePath = $path . $className . $exe;

        if(!file_exists($filePath)){
            echo " >>> <b>$className</b> <<< Class Can Not Be Found! The full path is ---><b> $filePath </b>";
        }

        include_once($filePath);
    }

?>
