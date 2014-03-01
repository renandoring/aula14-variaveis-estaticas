<?php
/**
 * Description of Catalogo
 *
 * @author rdoring
 */
class Catalogo{
    //Variavel Estatica
    static $Indice;
    //Function Variavel estatica            
    function __construct($nome){
        self::$Indice++;
        $i = self::$Indice;
        echo "APLICAÇÃO ".$nome."CRIADA"."\n";
    }
    static function Informacoes($indice){
        switch ($indice){
        case 1:
            echo "\n"."SOFTWARE PHOTOSHOP"."\n";
            break;
        case 2:
            echo "\n"."SOFTWARE DREAMWEAVER"."\n";
            break;
        case 3:
            echo "\n"."SOFTWARE FIREWORKS"."\n";
            break;
        case 4:
            echo "\n"."SOFTWARE FLASH"."\n";
            break;
        default :
            echo "NÂO EXITE INFORMAÇÃO";
        }
    }
}

?>

