
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
