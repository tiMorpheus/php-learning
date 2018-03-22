<?php

class Car {


    function Car() {
        $this->model = "VW";
    }
}
$colors = array('red', 'green', 'blue', 'yellow');


foreach ($colors as $value){
    static $i = 0;
    echo "$i )$value <br>";
    $i++;
}

//assosiative array
$age  = array("peter"=>"35", "Ben"=>"37", 'joe'=>"22");


foreach ($age as $x  => $x_value){
    echo "Key = ". $x . ", Value = " . $x_value . '. <br>';
}


//create an object

$herbie = new Car();
$x = "hello world";

echo $x;
$x = null;
echo '<br>';
echo var_dump($herbie->model);
echo '<br>';
echo var_dump($x);

?>
