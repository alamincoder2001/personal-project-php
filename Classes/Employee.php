<?php
class Employee {
    public static function read($id = null)
    {
        return "Hello world ".$id;
    }

    public static function create()
    {
        return "Create successfully from Employee";
    }
}


?>