# ☁️ Project Fog 


_Project Fog is VPS AutoScript for Debian and Ubuntu Distros.
Contains pre-installed tunneling application. Read below all supported application._

[![Korn|Fog](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/Kornsolid) 

![](https://komarev.com/ghpvc/?username=korn-sudo&color=green) 
<p align="d"> <img src="https://img.shields.io/badge/Version-2.4.0-pink.svg" </p>


## Supported Distros

- Ubuntu 18+
- Debian 9+


## Services

Currently these are applications already installed:

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
- V2Ray UUID Manager


## Features

- Automatic delete expired user account
- Automatic update OHP and Python Socks in every changes port in SSH and other services.
- Customize OHP and Python Socks [ Change Port, On or Off ]
- Webmin installed version 1.970 [updated]
- Automatic disconnect multilogin users [except in Openvpn].
              Multi-login Limit customize per user (see menu).
- Automatic applied rules in Iptables in every reboot and changes ports.


>_Iptables Rules are protection from torrent and other abusive use.
> Torrent Protection [ add newest torrent port].
> Port Scanner Basic Protection.
> Brute Force Attack Basic Protection._


## How to use

Access V2Ray Panel:
Go to your browser and enter this link: 
>_http://123.123.123.123:65432_

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


## Version 2.4.0 Changelog
1. OCS Panel error in creating account already fix.



## Contact Me

For other inquiries contact me at these site below:

| Sites | |
| ------ | ------ |
| Facebook | www.facebook.com/kornips |
| PHCorner | www.phcorner.net/members/blackestsaint.455497/|
| Telegram | https://t.me/blackestsaint |



## Development

Want to contribute or donate? Great!

Currently I do not have any VPS or server. It would be great if you spare some of yours VPS or server to continue this project.

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
