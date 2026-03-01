<?php

class User
{
    // 1. Hide the data from the outside world
    private $age;

    // 2. The "Setter" - Controls how data enters the vault
    public function setAge($age)
    {
        if ($age > 0 && $age < 120) {
            $this->age = $age;
        } else {
            echo "Invalid age provided!";
        }
    }

    // 3. The "Getter" - Controls how data leaves the vault
    public function getAge()
    {
        return "The person is " . $this->age . " years old.";
    }
}

$user = new User();
// $user->age = 25; // ERROR! Cannot access private property
$user->setAge(25);  // Works!
echo $user->getAge(); // Outputs: The person is 25 years old.

// Why do we do this?
// Data Validation: As seen above, you can stop "bad data" from entering your object.

// Flexibility: If you decide to change how age is stored (e.g., store "Birth Year" instead of "Age"), you only change the code inside the class. The person using your class won't even notice.

// Security: You can create "Read-Only" properties by providing a Getter but no Setter.