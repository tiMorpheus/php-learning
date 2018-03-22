<?php
/**
 * Created by PhpStorm.
 * User: ttymur
 * Date: 21.03.18
 * Time: 16:45
 */

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $website = test_input($_POST['website']);
    $comment = test_input($_POST['comment']);
    $gender = test_input($_POST['gender']);

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>



<h2>Form validation example</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


    Name : <input type="text" name="name">
    <br><br>
    E-mail : <input type="text" name="email">
    <br><br>
    Website : <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" id="" cols="40" rows="5"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <br><br>
    <input type="submit" name="submit" value="Submit">

</form>


<?php
echo "<h2>Your input</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

