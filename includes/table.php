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
                                $query = "SELECT * FROM clients ORDER BY id DESC";
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
                                                <img src="./assets/icons/icon_edit.png" alt="edit">
                                            </a>
                                            
                                            
                                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn">
                                                <img src="./assets/icons/icondelete.png" alt="delete">
                                            </a>
                                            
                                        </td>
                                    </tr>
        
                             <?php   } ?>

                        </tbody>
                    </table>