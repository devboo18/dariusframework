<?php

//=============
 // Aurora QueryBuilder
 //=============
 
 //-------------
 // @author: Dário Ribeiro de Lima
 //-------------
 
 /* Query Builder */
 
 /*
 * Um simples querybuilder com PDO 
 * O encadeamento de funções está funcional
 */

namespace Library;

class QueryBuilder{

    protected $PDO; #Variável de conexão PDO

    private $query;#Armazenamento da query final

    private $select; #Armanzenamento do SELECT
    private $from; #Armazenamento do FROM
    private $where; #Armazenamento das Condições
    private $conditional; #FLAG AND ou OR
    private $wheredata; #Data para o bindValue
    private $join; #Armazenamento dos JOINS
    private $set; #Armazenamento do SET para o update
    private $result; #Armazenamento do resultado

    public function __construct($PDO){

        /* Inicialização das Variáveis*/

        $this->PDO = $PDO;
        $this->select = '*';
        $this->where = "";
        $this->from = "";
        $this->conditional = " AND ";
    }

    #Construção do JOIN SQL
    public function join($table,$on,$jointype="INNER"){

        $this->join[] = " ".strtoupper($jointype)." JOIN $table ON $on";
        
        return $this;
    }

    #Função que começa um bloco de parentesis
    public function start_block(){

        $this->where .= $this->conditional." (";

        return $this;
    }

    #Função que termina um bloco de parentesis
    public function end_block(){

        $this->where .=")";

        return $this;
    }

    #Altera a flag condicional para OR
    public function or(){

        $this->conditional = " OR ";

        return $this;
    }

    #Altera a flag condicional para AND
    public function and(){

        $this->conditional = " AND ";

        return $this;
    }

    #Função que formata o FROM de um select. Aceita ARRAY com alias (TABLE=>ALIAS) e STRING
    public function from($table){
        
        if(is_array($table)){

            foreach($table as $tbl=>$alias){

                $this->from .= "$tbl AS $alias,";

            }

            $this->from = substr($this->from,0,-1);

        }else{

            $this->from = $table;

        }

        return $this;
    }

    /*Função que formata a parte condicional de uma query. Aceita somente array ASSOC*/
    public function where($where){

        $conditionalIterator = 0; # Evita que ANDs e ORs sejam adicionados desnecessariamente

        foreach($where as $field => $value){

            $conditionalIterator ++;
            $this->wheredata[':'.$field] = $value;
            $this->where .= "$field = :$field";

            if($conditionalIterator < count($where)){
                $this->where .= " {$this->conditional} ";
            }

        }

        return $this;

    }

    #Função que formata o SET para o UPDATE
    public function set($data){

        $this->prepareData($data);

        foreach($data as $field=>$value){

            $this->set .="$field = :$field ,";

        }

        $this->set = substr($this->set,0,-1);

        return $this;

    }

    #Função que formata as colunas para selecionar do SELECT. Aceita array e string
    public function select($select){

        if(is_array($select)){
            $this->select .= implode(',',$select);
        }else{
            $this->select .= $select; 
        }

        return $this;

    }

    #Função que organiza a query SELECT
    public function get(){

        $this->query  = "SELECT {$this->select} "; #SELECT
        $this->query .= "FROM {$this->from} "; #FROM
        

        #Caso exista JOIN ele incluirá na query
        if(count($this->join) > 0){

            foreach($this->join as $join){

                $this->query .= $join;

            }

        }

        #Caso exista WHERE ele incluirá na query
        if($this->where != ""){

            $this->query .= " WHERE ".$this->where;

        }

        $this->prepare();

        return $this;

    }

    #Função que insere dados no banco de dados
    public function insert($table,$data){

        $columns = implode(',',array_keys($data));
        $values = ':'.implode(',:',array_keys($data));

        $this->query = 'INSERT INTO '.$table.' ';
        $this->query .="($columns)";
        $this->query .="VALUES($values)";

        $this->prepareData($data);
        $this->prepare();
        
        return $this->PDO->lastInsertId();
        
    }


    #Função que altera dados no banco de dados
    public function update($table,$data){

        $this->query = "UPDATE $table SET {$this->set} WHERE {$this->where}";
        $this->prepare();

        return $this->result;

    }
    
    #Retorna um array associativo com todos os resultados
    public function resultArray(){

        return $this->result->fetchAll(\PDO::FETCH_ASSOC);

    }

    #Retorna um array associativo com uma unica linha
    public function rowArray(){
        
        return $this->result->fetch(\PDO::FETCH_ASSOC);

    }

    #Função que prepara os dados para o bindValue(:var)
    private function prepareData($data){
        foreach($data as $field => $value){
            $this->wheredata[':'.$field] = $value;
        }
    }
    #Função que prepara e executa a query
    private function prepare(){
        
        try{
            $stmt = $this->PDO->prepare($this->query);
            $execute  = $stmt->execute($this->wheredata);
            if($this->select != null){
                $this->result = $stmt;
            }else{
                $this->result = $execute;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
       
        return $this;

    }

}
