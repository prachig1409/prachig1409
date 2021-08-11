#!/bin/sh

file="arp_sip"
while read line
do
    a=$( echo -n "$line" | wc -c) # echo -n to prevent counting new line
    if [ "$a" -ne 493 ]; then
      echo "${line}"
    fi
done <"$file"

