#!/bin/csh
#set ip=`cat PAWS_ip.txt`

curl --header "Content-Type: application/json" --request POST --data '{
       "deviceDesc": {
        "rulesetIDs": "'"$4"'",
        "password": "'"$3"'",
        "username" : "'"$2"'"
    },
 
  "key":"'"$1"'"
   
}' https://safe-basin-01006.herokuapp.com/api/device_valid >Slave_init_resp.html
resp=`cat Slave_init_resp.html`

echo $resp



