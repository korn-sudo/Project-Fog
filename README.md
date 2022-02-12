# ☁️ Project Fog v2.5.6 ☁️


_Project Fog is a VPS AutoScript for Ubuntu and Debian Distros. Comes with pre-installed tunneling software. See below for a list of pre-installed programs._

[![Korn|Fog](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/Kornsolid) 

![](https://komarev.com/ghpvc/?username=korn-sudo&color=green) 



## Supported Distros

- Ubuntu 18. 20 and above.
- Debian 9, 10, 11, and above.


## Services

Currently, these are already installed applications:
1. OpenSSH​
2. Dropbear​
3. OpenVPN TCP​
4. OpenVPN UDP​
5. Squid3​
6. Privoxy​
7. Shadowsocks​
8. V2Ray Panel​
9. OCS Panel​
10. Openvpn Monitoring​
11. Badvpn​
12. Webmin​
13. Cerbot [ Generate and Revoke Cert ]​
14. Stunnel​
  [a. SSL through SSH]
  [b. SSL through Dropbear]
  [c. SSl through Openvpn]
15. OHP [ Over-HTTP-Puncher]​
    with User Interface:
  [a. OHP through Squid Proxy]
  [b. OHP through Privoxy]
 [ c. OHP through Openvpn]
16. Python Socks Proxy​
   with User Interface:
 [ a. Simple Socks Proxy]
 [ b. Direct Socks Proxy]
 [ c. Openvpn Socks Proxy]



## Features

1. Delete expired user accounts automatically
2. Every time SSH or other services change the port, OHP and Python Socks are automatically updated.
3. Customize OHP and Python Socks [ Change Port, On or Off ]
4. Webmin installed version 1.984 [updated]
5. Disconnecting multi-login users automatically [except in Openvpn and V2ray].
6. Multi-login Limit customized per user (see menu).
7. When rebooting and changing ports, Iptables rules are automatically applied.
8. IPtables is already configured to protect against torrents and other abusive uses.
9. Torrent Protection [ add newest torrent port].
10. Port Scanner Basic Protection.
11. Brute Force Attack Basic Protection.

## How to use

V2Ray Panel:
Go to your browser and enter this link: 
>_http://123.123.123.123:5431_

Note: Change 123.123.123.123 to your VPS IP Address
Username: admin | Password: admin

Access OCS Panel and OVPN Config:
Go to your browser and enter this link: 
>_http://123.123.123.123:85_

Note: Change 123.123.123.123 to your VPS IP Address

Enable OCS Panel : Edit the index.php 
Put your root password in Line 45 of this directory:
>_/home/vps/public_html/index.php_

Access all commands, type this in vps / server: 
>_menu_


## Installation

```sh
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/projectfog && chmod +x ./projectfog && ./projectfog
```

<h3 align="center">Screenshots</h3>
<p align="center">
<img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/projectfog.jpg/">
</p>


<br>
<br>

## Important Note:
_Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules_
<br>
<br>


## Project Fog v2.5.5 Changelog:
1. Fixed OCS Panel not working issue. This issue has been resolved.
2. Fixed V2ray Panel not working issue. This issue has been resolved.
3. Fixed not working commands in V2ray Menu.
4. Fixed Apache2 occupying port 80.
5. Fixed compatibility issues with Debian 11+
6. Fixed compatibility issue with Ubuntu 20+
7. Update Webmin from version:1.979 to version:1.984.
8. Added Expiry Date and Data Limit option per V2ray config created
9. Added "Change Username and Password" in V2ray Menu.
10. Optimize Autoscript commands.

## Project Fog v2.5.6 Changelog:
1. Resolved the issue where Openvpn Monitoring was not working in higher versions of Ubuntu(version20) and Debian(version11).
2. Universal Installer [It will install a Project Fog stable version compatible with the OS and version of your VPS]

You can manually install the right version for your VPS if the Universal Installer fails.
Here:
```sh
#Use this only if universal installer fails. See: Installation (for Universal Installer)
#Debian 9 and Debian 10:
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/deb255 && chmod +x ./deb255 && ./deb255

#Debian 11 and higher:
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/deb256 && chmod +x ./deb256 && ./deb256

#Ubuntu 18:
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ub255 && chmod +x ./ub255 && ./ub255

#Ubuntu 20 and higher:
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ub256 && chmod +x ./ub256 && ./ub256
```

## Known Bugs:
*V2ray Panel settings do not work.
     -You can change username and password in vps/server terminal, type "menu" > "12" > "15" to change it.​


## Development:​
Want to contribute or donate? Great!

I do not currently have a VPS or server. I would appreciate it if you could spare some of yours so that this project can continue.



## Contact Me

For other inquiries contact me at these site below:

| Sites | |
| ------ | ------ |
| Facebook | www.facebook.com/kornips |
| PHCorner | www.phcorner.net/members/blackestsaint.455497/|
| Telegram | https://t.me/blackestsaint |



<br>
<br>

##### _Credits to: PHC - Ford | Bon-Chan | lfasmpao | ADM-Manager | vaxilu | WaGo-G and PHC_JAYVEE_
##### _Special Thanks to: mhieqoh06, xFocus and Squid_


   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
