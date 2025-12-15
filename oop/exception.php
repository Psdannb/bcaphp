<?php
//Exception handling is a mechanism used to handle runtime errors in a controlled manner,
//  without stopping the execution of the program abruptly.
// exception handling is done using try, catch, throw, and finally blocks.
try {
    $file = fopen("test.txt", "r");
    if (!$file) {
        throw new Exception("File not found");
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br>Program execution completed.";
}


?>