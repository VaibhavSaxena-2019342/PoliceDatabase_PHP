<?php
// Start Session
session_start();

// Config File
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

// Autoloader
require_once 'lib/Template.php';
require_once 'lib/Database.php';
require_once 'lib/Record.php';