<?php
$title = 'Edit Student';
include 'header.php';
?>

<div class="container">
    <form action="updateStudentProceses.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="first_name" placeholder="Your first name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="last_name" placeholder="Your last name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your Email..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="contact">Contact</label>
            </div>
            <div class="col-75">
                <input type="text" id="contact" name="contact" placeholder="Your Contact..">
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