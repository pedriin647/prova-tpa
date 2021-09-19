<?php
class receita{

    private $id;
    private $email;
    private $nome;
    private $titulo;
    private $descricao;
    private $preparo;

    private $con;

    public function __construct(){

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    
    }

    public function create(){

        $sql = $this->con->prepare("INSERT INTO receita (email, nome, titulo, descricao, preparo) VALUES (?, ?, ?, ?, ?)");
        $sql->execute([$this->getEmail(). $this->getNome(). $this->getTitulo(). $this->getDescricao(). $this->getPreparo()]);
    }





    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getdescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setdescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of preparo
     */ 
    public function getPreparo()
    {
        return $this->preparo;
    }

    /**
     * Set the value of preparo
     *
     * @return  self
     */ 
    public function setPreparo($preparo)
    {
        $this->preparo = $preparo;

        return $this;
    }
}
