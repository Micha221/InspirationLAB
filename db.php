<?php
       function create_Connection()
            {
                $hostname = "localhost";
                $dbUser = "admin";
                $dbPassword = "admin";
                $dbName = "gopresent";

                $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName); //Connectie maken met de database (Mysqli )

                if($conn == false) //Checken of de connectie nog werkt
                {
                echo "Broken Connection";
                die();
                }

                return $conn;
            }
            function getQuery($conn, $query)
            {
                return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC); //Geef alles terug
            }

            function closeConnection($conn)
            {
                $conn->close();
            }
    ?>