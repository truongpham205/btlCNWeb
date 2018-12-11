<?php

    class Connection{
        private $host;
        private $user;
        private $pass;
        private $db;
        
        function __construct(){
            $this->host='localhost';
            $this->user='root';
            $this->pass='';
            $this->db='baodantri';
        }
        
        public function getConnection(){
            $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            if(!$conn){
                die('Ko the ket noi,'.mysqli_connect_error());
            }
            return $conn;
        }

        public function getQuery($sql){
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
//     $link=new Connection();
//     // $sql='select * from users';
//     $link->getConnection();
//     $link->getQuery($sql);
?>