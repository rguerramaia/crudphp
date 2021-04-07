<?php

/**
* Classe que faz a conexão com o banco de dados
*/
class PDOConnectionFactory
{
   
    /**
    * Variáveis de conexão
    * @var $con - Variável de conexão
    * @var $dbType - Tipo do banco de dados
    * @var $host = Endereço do servidor de banco de dados
    * @var $user - Usuário de conexão com o banco de dados
    * @var $password - Senha do usuário para conexão com o banco de dados
    * @var $db - Nome do banco
    * @var persistent - Conexão persistente com o banco de dados
    */
    protected $con = null;
    protected $dbType = "mysql";
    protected $host = "localhost";
    protected $user = "admin";
    protected $password = 'crudphp';
    protected $db = "crudphp";
    protected $persistent = false;

    /**
    * Checa a conexão persistente
    */
    public function PDOConnectionFactory($persistent = false)
    {
        if ($persistent != false)
        {
            $this->persistent = true;
        }
    }

    /**
    * Realiza a conexão com o banco de dados
    */
    public function getConnection()
    {
        try
        {
            $this->con = new PDO($this->dbType . ":host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->password, array(PDO::ATTR_PERSISTENT => $this->persistent));
            return $this->con;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    /**
    * Finaliza a conexão com o banco de dados
    */
    public function Close()
    {
        if ($this->con != null)
        {
            $this->con = null;
        }
    }
    
}