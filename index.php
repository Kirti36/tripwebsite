<?php


$server= "localhost";
$username= "root";
$password= "";
$database= "travel";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con){
    die("Could not connect".mysqli_connect_error());
}
//echo "Connected";
if(isset($_POST['save'])){
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO 'info_travel`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)VALUES ('$name','$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
echo $sql;

if($con->query($sql) == true){
    echo 'succesfully inserted';
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <img class="kp" src="download.jpg" alt="KV JODHPUR"> 
    <div class="container">
    <h1>Welcome to Kendriya Vidyalaya Trip Form</h1>
    <P>Enter your details here for participation in trip booking</P>
    <p class="msg">Thanks for participating...Have a good journey!!</p>

    <form method="post" action="index.php">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here..."></textarea>
        <button class="btn">Submit</button>
    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>