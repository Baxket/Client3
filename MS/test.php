<?php
$json ='{"data":{"serialNumber":"381c1232-3k7-jhfnne4e4-za9ab027f","deviceId":"c97026","password":"*********","username":"-1.6006000","modelId":"c63781-gdbnsn-63167hdb","manufacturerId":"5345-1277hd-637ha","phoneNumber":"0554324542","deviceType":"Fixed","region":"Greater Accra Region","district":"ablekuma Central Municipal","operator":"NCI","latitude":"6.68","longitude":"-1.6006","antennaheight":"54","antennaheighttype":"Above Ground Level"},"isValid":"True","avaliable Spectrums":62}';
;
$books = json_decode($json);
// access property of object in array
$sp = "avaliable Spectrums";
echo $books->$sp;