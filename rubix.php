<?php

// $permission = [permission] field in the table
// $userrole = the [required_role] field in the table
function can_use($permission, $userrole)
{
    $host = "localhost";
    $database = "rubix";
    $username = "root";
    $password = "";

    $db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

    $query = $db->prepare("SELECT * FROM permissions WHERE permission=? AND required_role=?");
    $query->execute([$permission, $userrole]);

    if($query->rowCount() > 0)
    {
        return true;
    } else {
        return false;
    }
}

// Example:
// if the role 'administrator' has permission 'add user', then: ...
if(can_use('add user', 'administrator')) {
    // do something
}