<?php

$u_agent = $_SERVER['HTTP_USER_AGENT'];
echo $u_agent;
$ub = 'other';
if(preg_match('/Firefox/i',$u_agent))
{
    $ub = "firefox";
}

if (isset($_GET['print']) && $_GET['print'] != "" && $ub == 'firefox') {
$pg = $_GET['print'];
echo $pg;
if (!file_exists('1')) {
echo '<b>It worked!</b>';
}
} 
else {
echo 'no';
}
?> 
