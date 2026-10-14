<?php

$conn = mysqli_connect('localhost','root','','portfolio_db');

if($conn){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}
"<br>";

mysqli_select_db($conn, 'portfolio_db');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into userinfodata(name, email, mobile, subject, message) values ('$name', '$email', '$mobile', '$subject' '$message')";

echo "$query" . "<br>";

if(mysqli_query($conn, $query)){
    echo "New Record Created Successfully";
}else{
    echo "Error: ". $query ."<br>" .mysqli_error($conn);
}

// This header did not show above query. redirct to the website.
//header('location:index.html');

mysqli_close($conn);
?>
