#!/bin/bash
echo -e "\n";
echo " 
 __.                                         __                
\_ |__   _______  ___           ______ _____/  |_ __ ________  
 | __ \ /  _ \  \/  /  ______  /  ___// __ \   __\  |  \____ \ 
 | \_\ (  <_> >    <  /_____/  \___ \\  ___/|  | |  |  /  |_> >
 |___  /\____/__/\_ \         /____  >\___  >__| |____/|   __/ 
     \/            \/              \/     \/           |__|    
"
echo "\n";

read -p "==| Log into Digitalocean and then press [enter] to continue..."
echo "\n";
read -p "==| Click 'Create Droplet' ([enter] to continue)..."
echo "\n";
read -p "==| Name the Droplet following the format repo_name-friendly_name, friendly_name can be found in the appropriate group_vars file  ([enter] to continue)..."
echo "\n";
read -p "==| Choose Ubuntu distro, size of server, London region and tick Backups ([enter] to continue)..."
echo "\n";

if [ ! -f ansible/keys/id_box-setup ]
  then
    ssh-keygen -t rsa -f ansible/keys/id_box-setup -N ''
fi

read -p "==| Click add SSH Key ([enter] to continue)..."
echo "\n";
cat ansible/keys/id_box-setup.pub
echo "\n";
read -p "==| Add the ***temporary*** public key above (which is from ansible/keys/id_box-setup.pub), click 'Add SSH Key', [enter] to continue..."
echo "\n";
read -p "==| Click Create Droplet. ||| WAIT... ||| When the Droplet has been created, press enter."
echo "\n";
read -p "==| Copy the IP address of the new droplet and put it in ansible/inventories/devserver-remote. Only press [enter] to continue when you've done this and saved the file..." 
echo "\n";
echo "
====| Running the box-setup ansible playbook... |====";
echo "\n";

export ANSIBLE_HOST_KEY_CHECKING=False

ansible-playbook --inventory-file=ansible/inventories/devserver-remote --extra-vars "ansible_ssh_user=root ansible_ssh_private_key_file=ansible/keys/id_box-setup timeout=30" ansible/box-setup.yml