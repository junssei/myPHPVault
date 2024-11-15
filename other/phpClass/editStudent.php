    
        <?php
            include 'header.php';
            
            $id = $_GET['id'];

            $select = "SELECT * FROM student WHERE id='$id'";

            $result = $mysqli->query($select);

            $row = mysqli_fetch_array($result);
        ?>
                <form action="editStudentProcess.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <label for="Firstname">First Name</label>
                    <input type="text" placeholder="Enter your firstname" name="first_name" value="<?php echo $row['first_name']; ?>">
                    <br>

                    <label for="Lastname">Last Name</label>
                    <input type="text" placeholder="Enter your lastname" name="last_name" value="<?php echo $row['last_name']; ?>">
                    <br>

                    <label for="Email">Email</label>
                    <input type="email" placeholder="Enter your email" name="email" value="<?php echo $row['email']; ?>">
                    <br>

                    <label for="Email">Contact</label>
                    <input type="contact" placeholder="Enter your contact" name="contact" value="<?php echo $row['contact']; ?>">
                    <br>

                    <button type="submit" name="update">Update</button>
                </form>
</body>
</html>