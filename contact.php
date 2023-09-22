<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $text=$_POST['text'];
}
$con=new mysqli('localhost','root','','legehare');

if($con){

    

    $sql="insert into `contactpage`(name,email,number,text)values('$name','$email','$number','$text')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Thank You!";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}


?>