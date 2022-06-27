<?php

$hostDB = 'ec2-34-200-35-222.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'dbib0pfubjv94r';
$userDB = 'uasnlaeiangbnd';
$pwDB = 'f00b84adc19cf523a7ed7fda3156e8f9783f8e2174a01af972ab32a7f4fa7e8a';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>
