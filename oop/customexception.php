<?php
class MyException extends Exception { }

try {
    throw new MyException("Custom exception occurred");
} catch (MyException $e) {
    echo $e->getMessage();
}
?>