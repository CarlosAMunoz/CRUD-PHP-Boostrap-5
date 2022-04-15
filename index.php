<?php

include("db.php");
include("./includes/header.php");
?>

    <main id="main">
        <div class="container mt-5 mx-auto" >
            <form action="create.php" method="POST">
                <div class="row">
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Bussines Name" name="bussines_name">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="E-mail" name="e_mail">
                    </div>
                    <div class="col-1 p-0">
                        <input type="text" class="form-control" placeholder="State" name="state">
                    </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Notes" name="notes">
                    </div>
                    <div class="col-1 p-0">
                        <input type="submit" class="btn btn-success" value="Add" name="create"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 ps-0">
                        <?php if(isset($_SESSION['message'])){ ?>
                            <div class="alert alert-success alert-dismissible fade show p-1 mt-2" role="alert">
                                 <?= $_SESSION['message']; ?>
                                <button type="button" class="btn-close m-2 p-0" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php session_unset();
                        } ?>

                    </div>
                </div>

                <div class="row"> 
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th> Bussines Name </th>
                                <th> Name </th>
                                <th> Phone </th>
                                <th> E-mail </th>
                                <th> State </th>
                                <th> Notes </th>
                            </tr>
                        </thead> 
                        <tbody>
                            <?php
                                $query = "SELECT * FROM clients";
                                $result_clients = mysqli_query($conn, $query);


                                while($row = mysqli_fetch_array($result_clients)){ ?>
                                    <tr> 
                                        <td><?php echo $row['bussines_name'] ?> </td>
                                        <td><?php echo $row['name'] ?> </td>
                                        <td><?php echo $row['phone'] ?> </td>
                                        <td><?php echo $row['e_mail'] ?> </td>
                                        <td><?php echo $row['state'] ?> </td>
                                        <td><?php echo $row['notes'] ?> </td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn">
                                                <i class="fa-solid fa-circle-minus"></i>
                                            </a>
                                        </td>
                                    </tr>
        
                             <?php   } ?>

                        </tbody>
                            

                    </table>
                </div>

            </form>
        </div>
        


    </main>

<?php
include("./includes/footer.php");
?>