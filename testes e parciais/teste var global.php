<?php
function teste() {
 

    echo '$foo no escopo global: ' . $GLOBALS["foo"] . "<BR>";
    
}

$foo = "Conteúdo de exemplo";
teste();
teste();
dados_globais();
?>