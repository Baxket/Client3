<?php




$json = file_get_contents('php://input');
$data = json_decode($json);


$timestamp= $data->timestamp;
$username = $data->deviceDesc->username;
$ID = $data->spectra[0]->ID;
$rulesetId = $data->deviceDesc->rulesetIDs;

$output=shell_exec("sh forward_spec_use.sh  $timestamp $rulesetId $username $ID"); //Execute forward message script with json encoded data

 $resp = json_decode($output);
echo "$output";







?>
