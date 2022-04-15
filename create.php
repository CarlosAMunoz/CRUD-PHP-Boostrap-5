<?php 

include('db.php');

if(isset($_POST['create'])){
   
    $bussines_name = $_POST['bussines_name'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $e_mail = $_POST['e_mail'];
    $state = $_POST['state'];
    $notes = $_POST['notes'];

    $query = "INSERT INTO clients(bussines_name, name, phone, e_mail, state, notes) VALUES ('$bussines_name', '$name', '$phone', '$e_mail', '$state', '$notes')";

    $result = mysqli_query($conn, $query);
    
    if (!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Client saved';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>