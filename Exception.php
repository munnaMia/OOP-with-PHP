<?php

function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        // We "throw" the error manually here
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    // $e is the exception object containing error details
    echo "Caught error: " . $e->getMessage();
} finally {
    echo " Calculation attempt finished.";
}
