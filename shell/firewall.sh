#!/bin/bash

iptables -F
iptables -X
iptables -Z

iptables -P INPUT DROP
iptables -P OUTPUT ACCEPT
iptables -P FORWARD ACCEPT

iptables -A INPUT -i lo -j ACCEPT
iptables -A INPUT -i eth0 -j ACCEPT
iptables -A INPUT -i eth1 -m state --state RELATED,ESTABLISHED -j ACCEPT
iptables -A INPUT -m state --state INVALID -j DROP

iptables -A INPUT -i eth1 -p tcp --dport 22 -j ACCEPT
iptables -A INPUT -i eth1 -p tcp --dport 80 -j ACCEPT
iptables -A INPUT -i eth1 -p tcp --dport 3306 -j ACCEPT
iptables -A INPUT -i eth1 -p tcp --dport 3690 -j ACCEPT
iptables -A INPUT -i eth1 -p tcp --dport 25565 -j ACCEPT

/etc/init.d/iptables save
