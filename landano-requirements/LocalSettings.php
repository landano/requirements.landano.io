<?php

/*******************************/
/* Enables ConfirmEdit Captcha */
/*******************************/
#wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
#$wgCaptchaQuestions = [
#  'What animal' => 'dog',
#];

#$wgCaptchaTriggers['edit']          = true;
#$wgCaptchaTriggers['create']        = true;
#$wgCaptchaTriggers['createtalk']    = true;
#$wgCaptchaTriggers['addurl']        = true;
#$wgCaptchaTriggers['createaccount'] = true;
#$wgCaptchaTriggers['badlogin']      = true;

/*******************************/
/* Disable UI error-reporting  */
/*******************************/
#ini_set( 'display_errors', 0 );

#$wgDebugToolbar = true;

$wgFavicon = "$wgScriptPath/assets/logo/favicon.ico";
$wgLogo = "$wgScriptPath/assets/logo/wiki.png";

#$wgForceHTTPS  = true;

/* Doubles as concept URI for WDQS - HTTP ONLY */
$wgServer = "http://requirements.landano.io";

$wgDisableAnonTalk = true;

$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['*']['createaccount'] = false;

/**** recent changes: 1 year ******/
$wgRCMaxAge = 365 * 24 * 3600;

$wgSitename = "requirements.landano.io";
$wgLanguageCode = "en";

// NB. not a variable, but function.
wfLoadExtension( 'WikibaseLocalMedia' );

$wgEnableUploads = true;

$wgUploadDirectory = "$IP/uploads";
$wgUploadPath = "$wgScriptPath/uploads";

// File uploads:
$wgCheckFileExtensions = false;
$wgMaxUploadSize = 106000000;

wfLoadExtension( 'MobileFrontend' );


wfLoadSkin( 'MinervaNeue' );
$wgMFDefaultSkinClass = 'SkinMinerva';
$wgMinervaAlwaysShowLanguageButton = true;

# wfLoadSkin( 'Timeless' );
# $wgDefaultMobileSkin = 'timeless'; // use Timeless skin

# wfLoadSkin( 'Vector' );
# $wgDefaultMobileSkin = 'vector'; // use Vector skin
