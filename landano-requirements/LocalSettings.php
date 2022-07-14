<?php

/*******************************/
/* Disable UI error-reporting  */
/*******************************/
#ini_set( 'display_errors', 0 );

/*****************************************/
/* Disable API endpoint error-reporting  */
/*****************************************/
#$wgDebugToolbar = true;

/**********************************/
/* Set logo to local ico and png  */
/**********************************/
$wgFavicon = "$wgScriptPath/assets/logo/favicon.ico";
$wgLogo = "$wgScriptPath/assets/logo/wiki.png";

/**********************************************/
/* Site URL                                   */
/* NB. Doubles as concept URL for WDQS - HTTP */
/*     do not change!                         */
/**********************************************/
$wgServer = "http://requirements.landano.io";

/*******************************/
/* Additional site MD          */
/*******************************/
$wgSitename = "requirements.landano.io";
$wgLanguageCode = "en";

/*******************************/
/* Site protections            */
/*******************************/
$wgDisableAnonTalk = true;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createaccount'] = false;

/*******************************/
/* 1 year for recent changes   */
/*******************************/
$wgRCMaxAge = 365 * 24 * 3600;

/*******************************/
/* Local media extension       */
/*******************************/

// Load Extension function.
wfLoadExtension( 'WikibaseLocalMedia' );

// Variables
$wgEnableUploads = true;
$wgUploadDirectory = "$IP/uploads";
$wgUploadPath = "$wgScriptPath/uploads";

// File uploads additional settings.
$wgCheckFileExtensions = false;
$wgMaxUploadSize = 106000000;

/*******************************/
/* Enable Mobile frontend      */
/*******************************/

// Functions.
wfLoadExtension( 'MobileFrontend' );
wfLoadSkin( 'MinervaNeue' );

// Variables.
$wgMFDefaultSkinClass = 'SkinMinerva';
$wgMinervaAlwaysShowLanguageButton = true;
