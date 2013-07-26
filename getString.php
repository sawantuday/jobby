<?php
 
$minute = $_POST['minutes'];
$hour = $_POST['hours'];
$day = $_POST['days'];
$month = $_POST['months'];
$weekDay = $_POST['weekdays'];

if($minute == 'select')	$minute = implode(',', $_POST['selectMinutes']);
if($hour == 'select')	$hour = implode(',', $_POST['selectHours']);
if($day == 'select')	$day = implode(',', $_POST['selectDays']);
if($month == 'select')	$month = implode(',', $_POST['selectMonths']);
if($weekDay == 'select')	$weekDay = implode(',', $_POST['selectWeekdays']);

$cronStr = "$minute $hour $day $month $weekDay";

var_dump($_REQUEST);
echo '<br>';
var_dump($cronStr);
exit;