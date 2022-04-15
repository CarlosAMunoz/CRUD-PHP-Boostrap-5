<?php

include("db.php");
include("./includes/header.php");
?>


<main id="main">
        <div class="container mt-5 mx-auto" >

        <!--Formulario   -->
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
            </form>


                <!--Alerta  -->
                <div class="row">
                    <div class="col-2 ps-0">
                        <?php if(isset($_SESSION['message'])){ ?>
                            <div class="alert alert-<?= $_SESSION['message_type'];  ?> alert-dismissible fade show p-1 mt-2" role="alert">
                                 <?= $_SESSION['message']; ?>
                                <button type="button" class="btn-close m-2 p-0" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php session_unset();
                        } ?>

                    </div>
                </div>


                
                <div class="row"> 
                   <?php
                    include("./includes/table.php");
                    ?>

                </div>

            
        </div>
        


    </main>

<?php
include("./includes/footer.php");
?>