<?php
       function create_Connection()
            {
                $hostname = "localhost";
                $dbUser = "admin";
                $dbPassword = "admin";
                $dbName = "gopresent";

                $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);

                if($conn == false)
                {
                echo "Broken Connection";
                die();
                }

                return $conn;
            }
            function getQuery($conn, $query)
            {
                return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
            }

            function closeConnection($conn)
            {
                $conn->close();
            }
    ?>