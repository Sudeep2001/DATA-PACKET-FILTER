#!/bin/bash

tcpdump -v -i wlp2s0 -c 3000 -w filter.pcap

tshark -r filter.pcap -T fields -e frame.number -e frame.time -e eth.src -e eth.dst -e ip.src -e ip.dst -e frame.len -e tcp.srcport -e tcp.dstport -e udp.srcport -e udp.dstport -e frame.protocols -E header=y -E separator=\| -E quote=d -E occurrence=f > network

grep "udp" network  > udp
grep "tcp" network  > tcp
grep "arp" network  > arp

cut -d\| -f 2 arp > arptime
cut -d\| -f 3 arp > arpmacsrc
cut -d\| -f 4 arp > arpmacdst
cut -d\| -f 7 arp > arplength
cut -d\| -f 2,3,4,7 arp > arpall

cut -d\| -f 2 tcp > tcptime
cut -d\| -f 3 tcp > tcpmacsrc
cut -d\| -f 4 tcp > tcpmacdst
cut -d\| -f 5 tcp > tcpipsrc
cut -d\| -f 6 tcp > tcpipdst
cut -d\| -f 7 tcp > tcpframelen
cut -d\| -f 8 tcp > tcpsrcport
cut -d\| -f 9 tcp > tcpdstport
cut -d\| -f 2,3,4,5,6,7,8,9 tcp > tcpall

cut -d\| -f 2 udp > udptime
cut -d\| -f 3 udp > udpmacsrc
cut -d\| -f 4 udp > udpmacdst
cut -d\| -f 7 udp > udpframelen
cut -d\| -f 10 udp > udpsrcport
cut -d\| -f 11 udp > udpdstport
cut -d\| -f 2,3,4,7,10,11 udp > udpall

