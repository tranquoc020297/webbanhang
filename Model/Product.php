<?php
include('Database.php');
class Product extends Database{
    public $id;
    public $name;
    public $idType;
    public $description;
    public $image;
    public $new;
    public $price;

    public function __construct(){
        self::connect();
    }

    public function save(){
        if(!isset($this->id))
            $sql = "INSERT INTO products (name,id_type,description,unit_price,image) VALUES ('$this->name',$this->idType,'$this->description',$this->price,'$this->image')";
        else
            $sql = "UPDATE  products SET name = '$this->name' , id_type = $this->idType , description = '$this->description' , unit_price = $this->price , image = '$this->image' WHERE id = $this->id"; 
        if(self::$conn->query($sql))
            return true;
    }

    public static function all(){
        self::connect();
        $stmt = self::$conn->prepare("SELECT * FROM products") or die(self::$conn->error);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $mang = array();
            while($row = $result->fetch_assoc()){
                $temp = new Product;
                $temp->id = $row['id'];
                $temp->name = $row['name'];
                $temp->idType = $row['id_type'];
                $temp->description = $row['description'];
                $temp->price = $row['unit_price'];
                $temp->image = $row['image'];
                $mang[] = $temp;
            }
            return $mang;
        }
    }

    public static function new(){
        self::connect();
        $stmt = self::$conn->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 8" ) or die(self::$conn->error);
        if($stmt->execute()){
            $result = $stmt->get_result();
            $mang = array();
            while($row = $result->fetch_assoc()){
                $temp = new Product;
                $temp->id = $row['id'];
                $temp->name = $row['name'];
                $temp->idType = $row['id_type'];
                $temp->description = $row['description'];
                $temp->price = $row['unit_price'];
                $temp->image = $row['image'];
                $mang[] = $temp;
            }
            return $mang;
        }
    }

    public function delete(){
        $stmt = self::$conn->prepare("DELETE FROM products WHERE id = $this->id") or die(self::$conn->error);
        if($stmt->execute()){
            $stmt->close();
            self::$conn->close();
            return true;
        }
    }

    public static function Find($key){
        self::connect();
        $stmt = self::$conn->prepare("SELECT * FROM products WHERE id = $key") or die(self::$conn->error);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($row = $result->fetch_assoc()){
                $obj = new Product;
                $obj->id = $row['id'];
                $obj->name = $row['name'];
                $obj->idType = $row['id_type'];
                $obj->description = $row['description'];
                $obj->price = $row['unit_price'];
                $obj->image = $row['image'];
                return $obj;
            }
            return null;
        }
        return null;
    }

}

?>