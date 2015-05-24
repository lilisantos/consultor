<?php

class Conexao {

    private $db_host  = 'localhost';
    private $db_user  = 'root'; 
    private $db_senha = ''; 
    private $db_banco = 'bd_consultor';

    private $conn = false;

    public function connect() {
        if (!$this->conn){
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_senha);
            if ($myconn){
                $seldb = @mysql_select_db($this->db_banco,$myconn);
                if ($seldb){
                    $this->con = true;
                    return true;
                }
                else
                    return false;
            }
            else
                return false;
        }
        else
            return true;
    }

   
    public function disconnect() {
        if ($this->conn){
            if(@mysql_close()) {
                $this->con = false;
                return true;
            }
            else
                return false;
        }
    }
}
