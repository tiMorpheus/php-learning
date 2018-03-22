
<?php

    $server_name = "localhost";
    $user_name = "root";
    $user_password = 'root';


    $conn = mysqli_connect($server_name, $user_name, $user_password);



//    if (!$conn){
//        die("Connection failed: " . mysqli_connect_error());
//
//    }


    try {
        $connection = new PDO("mysql:host=$server_name;dbname=myDb", $user_name,$user_password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        echo "Connected succsessfuly";


    }catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }







//
//    echo "Connected successfully";

    ?>