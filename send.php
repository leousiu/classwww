<?php
include('connect.php');
if(isset($_POST) == 'submit'){
    $typeofcar = $_POST['typeofcar'];
    $color = $_POST['color'];
    $specification = $_POST['specification'];
    $name = $_POST['names'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $contact = $_POST['contact'];
}
    $sql = "insert into cars(typeofcar, color, specification, name, email, tel, contact) values ('$typeofcar' ,'$color', '$specification', '$name', '$email', '$tel', '$contact')";
    if ($conn->query($sql) == TRUE){
        //connect ok
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
    header("Location: question3.php");
    die();
?>