<?php
$title = 'Homepage';
include 'header.php'; ?>

<?php

include 'Employee.php';

// Creating an object (instance) of the Employee class
$employee1 = new Employee();
$employee1->firstName = "John";
$employee1->lastName = "Doe";
$employee1->salary = 50000;

// Calling methods to access and display information
echo "Employee Name: " . $employee1->getFullName() . "<br>";
echo "Salary: $" . $employee1->getSalary();


?>

</body>

</html>