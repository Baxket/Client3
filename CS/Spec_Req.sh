#!/bin/sh
Username=$(cat config.cfg | grep -o 'Username=[^<,]\+' | cut -d "=" -f 2 )
Password=$(cat config.cfg | grep -o 'Password=[^<,]\+' | cut -d "=" -f 2)
SNO=$(cat config.cfg | grep -o 'Serial_Number=[^,]\+' | cut -d "=" -f2)
FID=$(cat config.cfg | grep -o 'Manufacturer_ID=[^,]\+' | cut -d "=" -f2)
MID=$(cat config.cfg | grep -o 'Model_ID=[^,]\+' | cut -d "=" -f2)
LAT=$(cat config.cfg | grep -o 'Latitude=[^,]\+' | cut -d "=" -f2)
LONG=$(cat config.cfg | grep -o 'Longitude=[^,]\+' | cut -d "=" -f2)
DT=$(cat config.cfg | grep -o 'Device=[^,]\+' | cut -d "=" -f2)
HHT=$(cat config.cfg | grep -o 'Antenna_Height=[^,]\+' | cut -d "=" -f2)
HT=$(cat config.cfg | grep -o 'Height_Type=[^,]\+' | cut -d "=" -f2)

> config2.cfg

curl --header "Content-Type: application/json" --request POST --data '{
     "deviceDesc": {
        "rulesetIDs": "57c8e0e9-dbf9-314a-b985-ea431ec6b6f6",
        "password": "'"$Password"'",
        "username" : "'"$Username"'"
    },
    "location": {
        "latitude" :"'"$LAT"'",
         "longitude" :"'"$LONG"'"
    }
    
}' https://tvws-basestation.herokuapp.com/MS/master_avail_spec_server.php >slave_spec_resp.html

status=$(cat slave_spec_resp.html | grep -o "AVAIL_SPEC_REQ_SLAVE")
resp=`cat slave_spec_resp.html`
echo $resp

Channel=$(cat slave_spec_resp.html | grep -o 'Channel=[^<,]\+' | cut -d "=" -f 2)
echo "Channel=$Channel" >> config2.cfg