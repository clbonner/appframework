<?php
namespace clb_dev\appframework;

// outputs a page to the browser with header and footer
function route($filename, $data = []) {
    if (file_exists("../controllers/{$filename}") and
        file_exists("../views/{$filename}"))
    {
        require("../controllers/{$filename}");
        require("../views/header.php");
        require("../views/{$filename}");
        require("../views/footer.php");
        return;
    }

	else
        error("Cannot find route to: " .$filename);
}

// returns an error message to the user
function error($error)
{
    require("../views/error.php");
    exit;
}

// connect the user to the database
function db_connect()
{
    require(__DIR__ ."/config.php");

    $db = new mysqli($host, $dbuser, $dbpass, $dbname, $dbport);

    if ($db->connect_error)
        error("Connection failed: " . $db->connect_error);
    else
        return $db;
}

// trims and escapes strings that will be outputted as html
function escape($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// check user is logged in before performing any database operations
function login_check()
{
    if (!isset($_SESSION["userid"]))
        exit;
}

?>
