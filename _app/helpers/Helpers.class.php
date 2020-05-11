<?php


class Helpers
{
    // 4,44 to 4.44 formato decimal
    public function converteValor($valor) {
        $verificaPonto = ".";
        if(strpos("[".$valor."]", "$verificaPonto")):
            $valor = str_replace('.','', $valor);
            $valor = str_replace(',','.', $valor);
            else:
              $valor = str_replace(',','.', $valor);   
        endif;
 
        return $valor;
 }
}
