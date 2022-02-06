# ☁️ Project Fog v2.5 ☁️


_Project Fog is a VPS AutoScript for Ubuntu and Debian Distros. Comes with pre-installed tunneling software. See below for a list of pre-installed programs._

[![Korn|Fog](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/Kornsolid) 

![](https://komarev.com/ghpvc/?username=korn-sudo&color=green) 



## Supported Distros

- Ubuntu 18. 20 and above.
- Debian 9, 10, 11, and above.


## Services

Currently, these are already installed applications:
- OpenSSH
- Dropbear
- Stunnel
- OpenVPN TCP
- OpenVPN UDP
- Squid3
- Privoxy
- OHP [ Over-HTTP-Puncher]
- Python Socks Proxy
- Shadowsocks
- V2Ray Panel
- OCS Panel
- Openvpn Monitoring



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


For Debian Distro:

```sh
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/fog-debian && chmod +x ./fog-debian && ./fog-debian
```
For Ubuntu Distro:
```sh
sudo su
wget https://github.com/korn-sudo/Project-Fog/raw/main/fog-ubuntu && chmod +x ./fog-ubuntu && ./fog-ubuntu
```
<h3 align="center">Screenshots</h3>
<p align="center">
<img src="https://phcorner.net/attachments/screenshot_20210301-133445_termius-jpg.1322528/" width=250 height=400 >
<img src="https://phcorner.net/attachments/screenshot_20210211-183356_chrome-jpg.1297712/" width=250 height=400 >
 <img src="https://phcorner.net/attachments/1613383892218-png.1302954/" width=250 height=400 >
</p>


<br>
<br>

## Important Note:
_Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules_
<br>
<br>


## Project Fog v2.5 Changelog:
1. Update Webmin from version:1.979 to version:1.984.
2. Fixed V2ray Panel not working issue. This issue has been resolved.
    Added VLESS+XTLS Xray
3. Fixed OCS Panel not working issue. This issue has been resolved.
4. Fixes compatibility issues with Debian 11+
5. Fixed compatibility issue with Ubuntu 20+


## Known Bugs:
*V2ray Panel settings do not work.
     -If you are worried about not being able to change your user and password, then the only option is to change the Panel Port.  Although it isn't enough, it is the only option.

## How to change Panel Port Settings: 
1. Access your virtual private server from your terminal
2. Type "menu" > "12" > "6"



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

##### _Credits to: PHC - Ford | Bon-Chan | lfasmpao | ADM-Manager | Sprov | WaGo-G and PHC_JAYVEE_
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
