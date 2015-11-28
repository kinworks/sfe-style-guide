# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  
  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "ubuntu/trusty64"

  # Forward port 80 on the VM to map to 8080 on our host machine
  config.vm.network "forwarded_port", guest: 80, host: 8080

  # Virtualbox config
  config.vm.provider "virtualbox" do |vb|
    # workaround to bug in mysql 5.6, see https://bugs.launchpad.net/ubuntu/+source/mysql-5.6/+bug/1312936
    vb.memory = 1024
    vb.name = "sfe_styleguide"
  end
  
  config.vm.synced_folder "html/", "/vagrant/html", :owner=> 'vagrant', :group=>'www-data', :mount_options => ['dmode=775', 'fmode=775']

  # vm name
  config.vm.define :sfe_styleguide do |t|
  end

  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :box
  end

  # Provisioning with Ansible
  config.vm.provision "ansible" do |ansible|
    ansible.inventory_path = "ansible/inventories/devserver-vagrant"
    ansible.playbook = "ansible/provision.yml"
    ansible.limit = "all"
    #ansible.verbose = "vvvv"
    ansible.extra_vars = { ansible_ssh_user: 'vagrant', ansible_ssh_host: '127.0.0.1', ansible_ssh_port: '2222' }
  end
end
