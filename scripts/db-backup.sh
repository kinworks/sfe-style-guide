#!/bin/bash
echo -e "Database backup: what server are we backing up from? Enter number.\n
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

ansible-playbook --inventory-file=ansible/inventories/$inventory $key ansible/db-backup.yml

echo -e "Add the sql file to the repo via git add, and commit starting the message with 'DATABASE' so others know to import the new version.\n"