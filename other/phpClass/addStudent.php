<?php include 'header.php'; ?>

<a href="studentList.php">List Student</a>
<br>
<br>

<div>
    <form action="addStudentProcess.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" name="first_name" placeholder="Enter your first name">

        <label for="lname">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter your last name">

        <label for="email">Email</label>
        Email Name: <input type="text" name="email" placeholder="Enter your email">

        <label for="contact"> Contact</label>
        <input type="text" name="contact" placeholder="Enter your contact">

        <input type="submit" value="Submit">
    </form>
</div>

</body>

</html>