#!/bin/sh

mysql -u root -e"
DROP DATABASE if exists packets;
CREATE DATABASE packets;
USE packets;
DROP TABLE if exists arp_sip1;
DROP TABLE if exists udp_sip1;
DROP TABLE if exists tcp_sip1;
CREATE table arp_sip1(
ARP_Source_ip VARCHAR(30));
CREATE table udp_sip1(
UDP_Source_ip VARCHAR(30));
CREATE table tcp_sip1(
TCP_Source_ip VARCHAR(30));
LOAD DATA LOCAL INFILE 'arp_sip' INTO TABLE arp_sip1;
LOAD DATA LOCAL INFILE 'udp_sip' INTO TABLE udp_sip1;
LOAD DATA LOCAL INFILE 'tcp_sip' INTO TABLE tcp_sip1;
SELECT ARP_Source_ip,COUNT(ARP_Source_ip) FROM arp_sip1 GROUP BY ARP_Source_ip ORDER BY COUNT(ARP_Source_ip) DESC LIMIT 5;
SELECT UDP_Source_ip,COUNT(UDP_Source_ip) FROM udp_sip1 GROUP BY UDP_Source_ip ORDER BY COUNT(UDP_Source_ip) DESC LIMIT 5;
SELECT TCP_Source_ip,COUNT(TCP_Source_ip) FROM tcp_sip1 GROUP BY TCP_Source_ip ORDER BY COUNT(TCP_Source_ip) DESC LIMIT 5;"
