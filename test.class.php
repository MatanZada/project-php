<?php

class Test extends Dbh{
    public function getUsers(){
        $sql = file_get_contents("the-amazing-shop.sql");
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch("./the-amazing-shop")){
            echo $row['clients_name'] . '<br>';
        }
    }
}