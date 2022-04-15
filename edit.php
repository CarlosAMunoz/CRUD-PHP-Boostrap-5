<?php
    include("db.php");
    
    if (isset($_GET['id'])){

        $id = $_GET['id'];
        $query = "SELECT * FROM clients WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            
            $row = mysqli_fetch_array($result);

            $bussines_name = $row['bussines_name'];
            $name = $row['name'];
            $phone = $row['phone'];
            $e_mail = $row['e_mail'];
            $state = $row['state'];
            $notes = $row['notes'];
        }
    }

    //Vlidamos si existe a través del método POST el valor update es porque queremos actualizar. 
    if(isset($_POST['update'])){
        $id = $_GET['id'];

        $bussines_name = $_POST['bussines_name'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $e_mail = $_POST['e_mail'];
        $state = $_POST['state'];
        $notes = $_POST['notes'];


        $query = "UPDATE clients set bussines_name = '$bussines_name', name = '$name', phone = '$phone', e_mail = '$e_mail', state = '$state', notes ='$notes' WHERE id = '$id'";
        mysqli_query($conn, $query);

   
        $_SESSION['message'] = 'Task Updated';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }

?>
<?php include("includes/header.php") ?>


<main id="main">
        <div class="container mt-5 mx-auto" >

            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="row">
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Bussines Name" name="bussines_name" value="<?= $bussines_name ?>">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $name ?>">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $phone ?>">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="E-mail" name="e_mail" value="<?= $e_mail ?>">
                    </div>
                    <div class="col-1 p-0">
                        <input type="text" class="form-control" placeholder="State" name="state" value="<?= $state ?>">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Notes" name="notes" value="<?= $notes ?>">
                    </div>
                    <div class="col-1 p-0">
                        <input type="submit" class="btn btn-warning" value="Edit" name="update"></input>
                    </div>
                </div>
            </form>
            <?php include("includes/table.php") ?>
        </div>
 </main> 



<?php include("includes/footer.php") ?>