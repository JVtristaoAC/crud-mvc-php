<?php

spl_autoload_register(function($ClasseChamada) {

 $arquivo = BASEDIR . '/' . $ClasseChamada . 'php';


if(file_exists($arquivo)){
    include $arquivo;
}
else{
    exit('Arquivo não encontrado. Arquivo: ' . $arquivo . "<br />");
}

});

?>