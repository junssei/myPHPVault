 <?php

    class Employee
    {
        // Properties (Attributes)
        public $firstName;
        public $lastName;
        public $salary;

        // Methods (Functions)
        public function getFullName()
        {
            return $this->firstName . ' ' . $this->lastName;
        }

        public function getSalary()
        {
            return $this->salary;
        }
    }



    ?>
