<?php
class Employee {
    public static function read($id = null)
    {
        return "Read from Employee ".$id;
    }

    public static function create()
    {
        return "Create successfully from Employee";
    }
}
