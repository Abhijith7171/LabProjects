

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Web Application</h1>
    <!-- <h1>Hello WOrld</h1> -->
    <form class="details" action="index.php" method="post">
        <input type="text" placeholder="Enter your name" name="name">
        <input type="number" placeholder="Enter your Age" name="age">
        <input type="submit" name="submit">
        <?php
$username="root";
$server="localhost";
$password="";

$con=mysqli_connect($server,$username,$password);



if($con){
    echo "Connected";
}

else{
    echo "Error Occured";
}
if(isset($_POST["submit"])){
    $age=$_POST["age"];
    $name=$_POST["name"];
    if($age>18){
        echo "<h1 class='result' ><br>You are  Eligible<br><h1>";
        
    }
    
    else{
        echo "<h1 class='result1' ><br>You are not Eligible<br><h1>";
    }
    
}


?>

    </form>
</body>
</html>
