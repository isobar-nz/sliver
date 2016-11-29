<?php

/**
 * Include SilverStripe's core code
 */
require_once(getcwd() . "/framework/core/Core.php");

global $databaseConfig;

// We don't have a session in cli-script, but this prevents errors
$_SESSION = null;

require_once(getcwd() . "/framework/model/DB.php");

// Connect to database
if (!isset($databaseConfig) || !isset($databaseConfig['database']) || !$databaseConfig['database']) {
    echo "\nPlease configure your database connection details.";
    exit(1);
}
DB::connect($databaseConfig);

Controller::create()->pushCurrent();

// Direct away - this is the "main" function, that hands control to the apporopriate controller
DataModel::set_inst(new DataModel());
