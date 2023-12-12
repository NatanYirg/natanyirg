<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $text=$_POST['text'];
}
$con=new mysqli('sql302.infinityfree.com','if0_35211299','8SJTxNOYKX','if0_35211299_lehegaretrading');

if($con){

    

    $sql="insert into `contactpage`(name,email,number,text)values('$name','$email','$number','$text')";
    $result=mysqli_query($con,$sql);
    if($result){
        header ('location: index.php');
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}


?>