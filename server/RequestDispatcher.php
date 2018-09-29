<?php

//=============
 // Aurora RequestDispatcher
 //=============
 
 //-------------
 // @author: Dário Ribeiro de Lima
 //-------------
 
 /* RequestDispatcher */
 
 /*
 * O objetivo é facilitar a visualização e o controle dos dados via request.
 * A requisição pode ser POST ou GET
 * Porém, ações serão realizadas. Dai surge o $type
 * Que autentica o tipo de manuseio de dados
 */
namespace Server;

class RequestDispatcher {

    #Declaração das variaveis de configuração
    private static $table,$type,$post,$get;

    public function __construct(){

        self::$table = "";
        self::$type = "";

    }

    /*
     * Função responsável pela execução e harmonia de funções com JS
    */
    public function index($url, $return = false){

        extract($url);
        /*[Table][Method]*/

        $table = "\\Server\\".ucfirst($table)."Requests";
        $table = new $table();

        #Verifica se o método existe
        if(in_array(($method),get_class_methods($table))){
            #Verifica se o tipo esta de acordo com a lib
            if(is_string($table) && $table != ''){
                
                self::$table = $table; #Salva globalmente a table

            }

            # Pega o resultado da execução
            $result =  ($table->{strtolower($method)}());

            #Se a flag estiver true, ele retorna
            if($return){
                return ($result);
            }else{
                echo $result;
            }

        }else{
            #Caso não exista método
            $error =  "Não existe Metodo com esse nome seu filho da puta";

        }

    }
}