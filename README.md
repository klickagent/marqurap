www directory mounted to /var/www with group www-data

it is a splitted mount from root directory

Wordpress DB and Testdrive DB for YII is autoprovisioned. YII uses a bootstrap theme.



To modify any configurations: bootstrap.sh and Vagrantfile are the way to go. It uses some data in the data/ folder (mainly for DB Provisioning.

