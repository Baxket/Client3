<?php


$json = file_get_contents('php://input');
$data = json_decode($json);


$key= $data->key;
$username = $data->deviceDesc->username;
$password = $data->deviceDesc->password;
$rulesetId = $data->deviceDesc->rulesetIDs;



$output=shell_exec("sh forward_initial.sh  $key $username $password $rulesetId"); //Execute forward message script with json encoded data

 $resp = json_decode($output);
 $w =  $resp->isValid;

$word ="True";
$first_line = strtok($output,"");

 if(strpos($w, $word) === true ){

 $serialNumber = $resp->data->serialNumber;
 $deviceId = $resp->data->deviceId;


$array_send = <<<EOT
    Succesful Validation of Client Device.<br>
  serial_Number=$serialNumber<br>
    Available Channels:11<br>
EOT;
echo $array_send;
 	
 }
 else{echo " failed ";
 	echo "$output";
 	echo strpos($resp->isValid, $word);



}
$resp = json_decode($output); 

//Send back to slave

?>
