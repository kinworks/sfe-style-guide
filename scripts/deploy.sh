#!/bin/bash
echo -e "\n";
echo " 
    .___            .__                
  __| _/____ ______ |  |   ____ ___.__.
 / __ |/ __ \\____ \|  |  /  _ <   |  |
/ /_/ \  ___/|  |_> >  |_(  <_> )___  |
\____ |\___  >   __/|____/\____// ____|
     \/    \/|__|               \/     
release the work into the wild   
"
echo "\n";

echo "
====| Running the deployment ansible playbooks... |====";
echo "\n";

echo -e "Where are we deploying too?\n
1 - devserver-remote
2 - webserver\n"

read inventorynumber

if [ $inventorynumber == '1' ]
  then
    inventory="devserver-remote"
fi

if [ $inventorynumber == '2' ]
  then
    inventory="webserver"
fi


export ANSIBLE_HOST_KEY_CHECKING=False

ansible-playbook --inventory-file=ansible/inventories/$inventory ansible/syncremote.yml

ansible-playbook --inventory-file=ansible/inventories/$inventory ansible/deploy.yml