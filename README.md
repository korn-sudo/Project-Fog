# ☁️ Project Fog 

_Project Fog is VPS AutoScript for Debian and Ubuntu Distros.
Contains pre-installed tunneling application. Read below all supported application._

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid) 

![](https://komarev.com/ghpvc/?username=korn-sudo&color=green)

## Supported Distros:

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


## Features

- Automatic delete expired user account
- Automatic update OHP and Python Socks in every changes port in SSH and other services.
- Customize OHP and Python Socks [ Change Port, On or Off ]
- Webmin installed version 1.970 [updated]
- Automatic disconnect multilogin users [except in Openvpn].
              Multi-login Limit customize per user (see menu).
- Automatic applied rules in Iptables in every reboot and changes ports.


>_Iptables Rules are protection from torrent and other abusive use._
>_ Torrent Protection [ add newest torrent port]._
>_ Port Scanner Basic Protection._
>_ Brute Force Attack Basic Protection._

How to access V2Ray Panel:
Go to your browser and enter this link: 
>http://123.123.123.123:65432

Note: Change 123.123.123.123 to your VPS IP Address
Username: admin | Password: admin

How to access OCS Panel and OVPN Config:
Go to your browser and enter this link: 
>http://123.123.123.123:85

Note: Change 123.123.123.123 to your VPS IP Address

To Enable OCS Panel, you must edit the index.php 
Put your root password in Line 45 of this directory:
>/home/vps/public_html/index.php


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

## Contact Me:

For other inquiries contact me at these site below:

| Sites | |
| ------ | ------ |
| Facebook | www.facebook.com/kornips |
| PHCorner | www.phcorner.net/members/blackestsaint.455497/|
| Telegram | https://t.me/blackestsaint |


## Development

Want to contribute or donate? Great!

Currently I do not have any VPS or server. It would be great if you spare some of yours VPS or server to continue this project.


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
