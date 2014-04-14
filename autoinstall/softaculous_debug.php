<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softaculous_debug.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

//================================================================//
// NOTE : DELETE this file after you have tested the Auto Install //
// You can COMMENT out any debug method you wish during debuging  //
//================================================================//

// Echo the Success Message if the script is installed
$GLOBALS['softaculous_conf']['echo_success'] = 1;

// Echo the error message on error
$GLOBALS['softaculous_conf']['debug_echo'] = 1;

// Write the error to the file 
//$GLOBALS['softaculous_conf']['debug_file'] = '/path/to/writable/error.log';

// Let PHP log error i.e. the Softaculous module will pass the error to the error_log() funtion
$GLOBALS['softaculous_conf']['log_error'] = 1;

// If set to 1 this will log the error in your System Activity Log in WHMCS panel
$GLOBALS['softaculous_conf']['logActivity'] = 1;

?>