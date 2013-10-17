if [[ ! -f /apt-get-run ]]; then sudo apt-get update && sudo touch /apt-get-run; fi
# preconfigure mailutils
echo 'postfix postfix/main_mailer_type select Internet Site' | sudo debconf-set-selections
echo 'postfix postfix/root_address string admin@mydomain.org' | sudo debconf-set-selections
echo 'postfix postfix/mailname string example.org' | sudo debconf-set-selections
echo 'postfix postfix/relayhost string ted.example.internal' | sudo debconf-set-selections
echo 'postfix postfix/destinations string $(hostname -f), localhost' | sudo debconf-set-selections

# install mailutils
sudo DEBIAN_FRONTEND=noninteractive apt-get -y -q install postfix mailutils

# postfix config
sudo postconf -e "myorigin = example.com"
sudo postconf -e "myhostname=server1.example.com"
sudo postconf -e "relay_domains = example.com, example2.com, example3.com"
sudo postfix reload
