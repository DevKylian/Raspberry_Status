<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', true);

// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();

// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));

// Website Infos
define("WEBSITE_TITLE", "");
define("WEBSITE_NAME", "");
define("WEBSITE_URL", "");
define("WEBSITE_DESCRIPTION", "");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Database Infos
define("DATABASE_HOST", "");
define("DATABASE_NAME", "");
define("DATABASE_USER", "");
define("DATABASE_PASSWORD", "");