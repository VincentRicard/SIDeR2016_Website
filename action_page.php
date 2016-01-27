<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";

?>


<?php
$name= $_POST["first-name"];
$surname= $_GET["last-name"];
$email= $_GET["email"];
$school = $_GET["school"];
$msg = $name + $surname + $email + $school;
echo 'this is a ' + $name;
// mail("mynario@gmail.com","Sider test",$msg);
 ?>

</body>
</html>
