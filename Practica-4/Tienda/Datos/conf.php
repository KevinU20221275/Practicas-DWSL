<?php
Class Conf {
    private $server;

    private $user;

    private $password;

    private $database;

    private $connection;

    private $result_query;

    public function __construct()
    {
        $this->server = '127.0.0.1';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'dbtienda';
    }

    protected function connect(){
        $this->connection = mysqli_connect(
            $this->server, 
            $this->user, 
            $this->password, 
            $this->database)
            or die("Error al conectar a la base de datos: ". mysqli_connect_error());

        return $this->connection;
    }

    protected function disconnect(){
        return mysqli_close($this->connection);
    }

    public function exec_query($query){
        $this->result_query = mysqli_query($this->connect(), $query)
        or die("Error en la consulta: ". mysqli_error($this->connection));

        return $this->result_query;
    }
}

?>