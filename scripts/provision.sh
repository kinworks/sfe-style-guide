#!/bin/bash
echo -e "\n";
echo " 
                      _     _             
                     (_)   (_)            
 _ __  _ __ _____   ___ ___ _  ___  _ __  
| '_ \| '__/ _ \ \ / / / __| |/ _ \| '_ \ 
| |_) | | | (_) \ V /| \__ \ | (_) | | | |
| .__/|_|  \___/ \_/ |_|___/_|\___/|_| |_|
| |                                       
|_|  Software & Project Installation / Config    
"
echo "\n";

echo "
====| Running the install/provision ansible playbook... |====";
echo "\n";

export ANSIBLE_HOST_KEY_CHECKING=False

ansible-playbook --inventory-file=ansible/inventories/webserver ansible/provision.yml