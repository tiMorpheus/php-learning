<?php



$server_name = "localhost";
$user_name = "root";
$user_password = 'root';

$db_name = "myDb";




try{

    $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $user_password);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP 

    )";



    $conn->exec($sql);

    echo "Table has been created";
} catch (PDOException $e){
    echo $sql."<br>".$e->getMessage();
}

$conn = null;
?>
