<?php

class Test extends Dbh{

    public function getProducts(){
        $sql = "SELECT * FROM product";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['ProductId'];
            echo $row['Code'];
            echo $row['Name'];
        }
    }
}