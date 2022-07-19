<?php
if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['amount'])){

    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $id = uniqid(4);

    require 'connection.php';

    $query1 = "UPDATE `customers` SET `Amount` = `Amount` - '$amount' WHERE `Email` = '$from' ";
    $query2 = "UPDATE `customers` SET `Amount` = `Amount` + '$amount' WHERE `Email` = '$to' ";
    $query3 = "INSERT INTO `transaction`(`Tran_ID`, `From`, `To`, `Amount`) VALUES ('$id','$from','$to','$amount')";
    $result = mysqli_query($con,$query1);
    if($result){
        $result = mysqli_query($con,$query2);
    }
    if($result){
        $result = mysqli_query($con,$query3);
    }

    if($result){
        header('location:customers.php?status=200');
        die();
    }else{
        header('location:customers.php?status=501');
        die();
    }

}else{
    header('location:customers.php');
    die();
}
?>