#!/bin/bash
echo -e "Database import: what server are we importing to?\n
1 - devserver-vagrant
2 - devserver-remote
3 - webserver\n"

read inventorynumber

if [ $inventorynumber == '1' ]
  then
    inventory="devserver-vagrant"
fi

if [ $inventorynumber == '2' ]
  then
    inventory="devserver-remote"
fi

if [ $inventorynumber == '3' ]
  then
    inventory="webserver"
fi


key=""

if [ $inventory == 'devserver-vagrant' ]
  then
    key="--private-key=.vagrant/machines/sos_server/virtualbox/private_key"
fi

export ANSIBLE_HOST_KEY_CHECKING=False

ansible-playbook --inventory-file=ansible/inventories/$inventory $key ansible/db-import.yml