<?php
    // class Database {
        $hostname = "ID362601_GoPresent.db.webhosting.be";
        $dbUser = "WebUser";
        $dbPassword = "GoPresent123";
        $dbName = "ID362601_GoPresent";

        $conn = mysqli_connect($this->hostname, $this->dbUser, $this->dbPassword, $this->dbName, $this->dbPort);
        // function __construct() {
        //     $this->conn = $this->createConnection();
        // }

        // function createConnection() {

    //         // checken of de connectie nog werkt
    //         if ($conn == false) {
    //             echo "Aj aj t is broke";
    //             die();
    //         }

    //         return $conn;
    //     }
    
    //     function getQuery($query) {
    //         return mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);
    //     }
    
    //     function InsertQuery($query) {
    //         mysqli_query($this->conn,$query);
    //     }
    
    //     function closeConnection() {
    //         $this->conn->close();
    //     }
    // }