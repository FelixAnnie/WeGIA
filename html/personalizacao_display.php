<?php

if (file_exists("classes/Personalizacao_display.php")){
    require_once "classes/Personalizacao_display.php";
}elseif (file_exists("../classes/Personalizacao_display.php")) {
    require_once "../classes/Personalizacao_display.php";
}elseif (file_exists("../../classes/Personalizacao_display.php")){
    require_once "../../classes/Personalizacao_display.php";
}
function display_campo($campo, $tipo){

    /*

    Esta função recebe como parametro:
        o nome do campo (Título, Subtítulo, Rodapé, etc);
        o modo como setá exibido:

            txt: será exibido como um pedaço de texto, com o nome do campo na tag <h1> e o conteúdo em uma tag <p>
            str: exibe puramente o conteúdo, sem nome do campo e sem nenhuma tag

            file: exibe apenas o nome do arquivo de imagem, que está contido em ./img/database_images/

    */

    $display = new Display_campo($campo, $tipo);
    $display->display();
}

?>