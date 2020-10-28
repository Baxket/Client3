#!/bin/sh
user=$1
password=$2

curl --header "Content-Type: application/json" --request POST --data '{"deviceDesc": {"rulesetIDs": "57c8e0e9-dbf9-314a-b985-ea431ec6b6f6","password":"'"$2"'","username":"'"$1"'"},"key":"client"}' https://tvws-basestation.herokuapp.com/MS/test2.php >Slave_init_resp.html

 > config.cfg
status1=$(cat slave_init_resp.html | grep -o "Succesful Validation of Client Device")
status2=$(cat slave_init_resp.html | grep -o "Validation failed")



Username=$(cat slave_init_resp.html | grep -o 'Username=[^<,]\+' | cut -d "=" -f 2 )
Operator=$(cat slave_init_resp.html | grep -o 'Operator=[^<,]\+' | cut -d "=" -f 2)
Manufacturer_ID=$(cat slave_init_resp.html | grep -o 'Manufacturer_Id=[^<,]\+' | cut -d "=" -f 2)
Model_ID=$(cat slave_init_resp.html | grep -o 'Model_Id=[^<,]\+' | cut -d "=" -f 2)
Serial_Number=$(cat slave_init_resp.html | grep -o 'Serial_Number=[^<,]\+' | cut -d "=" -f 2)
Device=$(cat slave_init_resp.html | grep -o 'Device_Id=[^<,]\+' | cut -d "=" -f 2)
Longitude=$(cat slave_init_resp.html | grep -o 'Longitude=[^<,]\+' | cut -d "=" -f 2)
Latitude=$(cat slave_init_resp.html | grep -o 'Latitude=[^<,]\+' | cut -d "=" -f 2)
Region=$(cat slave_init_resp.html | grep -o 'Region=[^<,]\+' | cut -d "=" -f 2)
District=$(cat slave_init_resp.html | grep -o 'District=[^<,]\+' | cut -d "=" -f 2)
Phone_Number=$(cat slave_init_resp.html | grep -o 'Phone_Number=[^<,]\+' | cut -d "=" -f 2)
Antenna_Height=$(cat slave_init_resp.html | grep -o 'Antenna_Height=[^<,]\+' | cut -d "=" -f 2)
Antenna_Type=$(cat slave_init_resp.html | grep -o 'Antenna_Height_Type=[^<,]\+' | cut -d "=" -f 2)
Radiated_power=$(cat slave_init_resp.html | grep -o 'Radiated_power=[^<,]\+' | cut -d "=" -f 2)
Conducted_power=$(cat slave_init_resp.html | grep -o 'Conducted_power=[^<,]\+' | cut -d "=" -f 2)
time=$(cat slave_init_resp.html | grep -o 'time=[^<,]\+' | cut -d "=" -f 2)


echo "Username=$Username" >> config.cfg
echo "Password=$2">>config.cfg
echo "Operator=$Operator" >> config.cfg
echo "Manufacturer_ID=$Manufacturer_ID" >> config.cfg
echo "Model_ID=$Model_ID" >> config.cfg
echo "Serial_Number=$Serial_Number" >> config.cfg
echo "Device_Id=$Device" >> config.cfg
echo "Longitude=$Longitude" >> config.cfg
echo "Latitude=$Latitude" >> config.cfg
echo "Region=$Region" >> config.cfg
echo "District=$District" >> config.cfg
echo "Phone_Number=$Phone_Number" >> config.cfg
echo "Antenna_Height=$Antenna_Height" >> config.cfg
echo "Antenna_Type=$Antenna_Type" >> config.cfg
echo "Radiated_power=$Radiated_power" >> config.cfg
echo "Conducted_power=$Conducted_power" >> config.cfg
echo "time=$time" >> config.cfg


#lat=$(cat config.cfg | grep -o 'Latitude=[^ ,]\+' | cut -d "=" -f2)

if [ "$status1" == "Succesful Validation of Client Device" ]
then
echo "$(cat slave_init_resp.html)<br><br>"

#echo " Now requesting for channels....<br><br>"

#sh ./Avail_Spect_Slave.sh
elif [ "$status2" == "Validation failed"]
then
echo  "$(cat slave_init_resp.html)<br><br>"
else
echo  "$(cat slave_init_resp.html)<br><br>"
exit 0
fi 
