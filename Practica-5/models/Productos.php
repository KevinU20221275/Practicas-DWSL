<?php
class Productos{
    private $conn;

    private $table_name = "productos";

    public $id;

    public $name;

    public $description;

    public $categorie;

    public function __construct($db){
        $this->conn = $db;
    }

    public function create(){
        $query = "INSERT INTO ".$this->table_name." (name, description, categorie) VALUES (:name, :description, :categorie)";
        $result = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->categorie = htmlspecialchars(strip_tags($this->categorie));
        
        $result->bindParam(":name", $this->name);
        $result->bindParam(":description", $this->description);
        $result->bindParam(":categorie", $this->categorie);

        if ($result->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function get_products(){
        $query = "SELECT * FROM ".$this->table_name;
        $result = $this->conn->prepare($query);
        $result->execute();
        return $result;
    }

    public function get_product_by_id(){
        $query = "SELECT * FROM ".$this->table_name.
        " WHERE id=:id";
        $result = $this->conn->prepare($query);
        $result->bindParam(":id", $this->id);
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $this->name = $row["name"];
        $this->description = $row["description"];
        $this->categorie = $row["categorie"];

        return $result;
    }

    public function update(){
        $query = "UPDATE ".$this->table_name." SET name=:name, description=:description, categorie=:categorie 
        WHERE id=:id";
        $result = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->categorie = htmlspecialchars(strip_tags($this->categorie));
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        $result->bindParam(":name", $this->name);
        $result->bindParam(":description", $this->description);
        $result->bindParam(":categorie", $this->categorie);
        $result->bindParam(":id", $this->id);

        if ($result->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function delete(){
        $query = "DELETE FROM ".$this->table_name.
        " WHERE id=:id";
        $result = $this->conn->prepare($query);
        $result->bindParam(":id", $this->id);

        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>