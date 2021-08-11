#!/bin/sh

/usr/sbin/tcpdump -ne -c 1000 > datafile

grep "ARP" datafile > arp_main
grep "UDP" datafile > udp_main
grep "tcp" datafile > tcp_main

cut -d " " -f 1 arp_main > arp_tsp
cut -d " " -f 10-13 arp_main > temp_sip
grep -E -o '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)' temp_sip > arp_sip
cut -d " " -f 2 arp_main > arp_smac
cut -d " " -f 9 arp_main > arp_len
cut -d " " -f 13-16 arp_main > temp_dip
grep -E -o '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)' temp_dip > arp_dip
cut -d " " -f 4 arp_main > arp_dmac

cut -d " " -f 1 udp_main > udp_tsp
cut -d " " -f 10 udp_main > udp_sip
cut -d "." -f 5 udp_sip > udp_sport 
cut -d " " -f 2 udp_main > udp_smac
cut -d " " -f 12 udp_main > udp_dip
cut -d "." -f 5 udp_dip | sed 's/://' > udp_dport 
cut -d " " -f 4 udp_main > udp_dmac
cut -d " " -f 8-9 udp_main > udp_pac

cut -d " " -f 1 tcp_main > tcp_tsp
cut -d " " -f 10 tcp_main > tcp_sip
cut -d " " -f 12 tcp_main > tcp_dip
cut -d " " -f 13 tcp_main > tcp_port
cut -d " " -f 2 tcp_main > tcp_smac
cut -d " " -f 4 tcp_main > tcp_dmac
cut -d " " -f 8-9 tcp_main > tcp_len


paste arp_tsp arp_sip arp_dip arp_sport arp_dport arp_smac arp_dmac arp_paclen arp_macadd> arp_all
paste tcp_tsp tcp_sip tcp_dip tcp_sport tcp_dport tcp_smac tcp_dmac tcp_paclen tcp_macadd > tcp_all
paste udp_tsp udp_sip udp_dip udp_sport udp_dport udp_smac udp_dmac udp_paclen udp_macadd> udp_all


