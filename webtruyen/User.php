<?php

include 'layout/connect.php';
class User{
    private $id;
    private $name;
    private $password;

    public function __construct($Id,$Name,$Password){
        $this->$id = $Id;
        $this->$name = $Name;
        $this->$password = $Password;
    }

    public function getId(){
        return $this->$id;
    }

    public function getName(){
        return $this->$name;
    }

    public function getPassword(){
        return $this->$password;
    }

    public function setPassword($Password){
        $this->$password = $Password;
    }
    public function checkUser(){
        $link = new Connection();
        $conn = $this->getConnection();
            // $result = mysqli_query($sql);
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["userId"]. " - Name: " . $row["userName"]. " " . $row["userPass"]. "<br>";
                }
             else {
                echo "0 results";
            }
            $conn->close();
    }
}

?>