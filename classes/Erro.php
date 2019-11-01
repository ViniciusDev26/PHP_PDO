<?php

class Erro
{
    public static function tratarError(Exception $e){
        if (DEBUG){
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        }else{
            echo $e->getMessage();
        }
    }
}