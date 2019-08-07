<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();
    ini_set( "session.cookie_lifetime", 86400 ); // Set session timeout to 24 hours

    /* require authentication for most pages
    if (!preg_match("{(?:login_student|login_teacher|login|logout|register_student|index|register_teacher|dasboard)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if ($_SESSION["authenticated"] === "s")
        {
            redirect("dashboard.php");
        }
        else if ($_SESSION["authenticated"] === "t")
        {
            redirect("dashboard.php");
        }
        else if (empty($_SESSION["authenticated"]))
        {
            redirect("index.php");
        }
    }*/

?>
