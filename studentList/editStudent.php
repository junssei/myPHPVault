<?php
$title = 'Edit Student';
include 'header.php';

$student_id = $_GET["sID"];
$sql = "SELECT * FROM students WHERE student_id = $student_id";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
?>

<div class="container">
    <form action="updateStudentProceses.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="first_name" placeholder="Your first name.." value="<?php echo $row['first_name']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="last_name" placeholder="Your last name.." value="<?php echo $row['last_name']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your Email.." value="<?php echo $row['email']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="contact">Contact</label>
            </div>
            <div class="col-75">
                <input type="text" id="contact" name="contact" placeholder="Your Contact.." value="<?php echo $row['contact']; ?>">
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>

</html>