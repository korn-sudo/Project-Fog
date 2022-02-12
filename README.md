
# ☁️ Project Fog v2.5.6 ☁️

Project Fog is a VPS AutoScript for Ubuntu and Debian Distros. Comes with pre-installed tunneling software. See below for a list of pre-installed programs.

[![Korn|Fog](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/Kornsolid) 

![](https://komarev.com/ghpvc/?username=korn-sudo&color=green) 
###
## Supported Distros

- Ubuntu 18. 20 and above.
- Debian 9, 10, 11, and above.

###

## Installation

_It will install the version of Project Fog that is compatible with your VPS's operating system and version._

<p align="center">
  <img src="https://user-images.githubusercontent.com/76937659/153705486-44e6c1b2-74fa-4d44-be1c-36c8fdb83331.gif"/>
</p>

```bash
  sudo su
  wget https://github.com/korn-sudo/Project-Fog/raw/main/projectfog && chmod +x ./projectfog && ./projectfog
```

<p align="center">
  <img src="https://user-images.githubusercontent.com/76937659/153705486-44e6c1b2-74fa-4d44-be1c-36c8fdb83331.gif"/>
</p>


    
## Services
 - OpenSSH​
- Dropbear​
- OpenVPN TCP​
- OpenVPN UDP​
- Squid3​
- Privoxy​
- Shadowsocks​
- V2Ray Panel​
- OCS Panel​
- Openvpn Monitoring​
- Badvpn​
- Webmin​
- Cerbot [ Generate and Revoke Cert ]​
- Stunnel​
  - SSL through SSH
  - SSL through Dropbear
  - SSl through Openvpn
- OHP [ Over-HTTP-Puncher]​
   - OHP through Squid Proxy
   - OHP through Privoxy
   - OHP through Openvpn
- Python Socks Proxy​
   with User Interface:  
   - Simple Socks Proxy
   - Direct Socks Proxy​
  - Openvpn Socks Proxy


## Features

- Delete expired user accounts automatically
- Every time SSH or other services change the port, OHP and Python Socks are automatically updated.
- Customize OHP and Python Socks [ Change Port, On or Off ]
- Disconnecting multi-login users automatically [except in Openvpn and V2ray].
- Multi-login Limit customized per user (see menu).
- When rebooting and changing ports, Iptables rules are automatically applied.
- IPtables is already configured to protect against torrents and other abusive uses.
- Torrent Protection [ add newest torrent port].
- Port Scanner Basic Protection.
- Brute Force Attack Basic Protection.


## Guide

#### How to access V2Ray Panel:

`
  http://123.123.123.123:5431
  Note: Change 123.123.123.123 to your VPS IP Address
  `

#### V2ray Default User and Password
| Username | Password    | 
| :-------- | :------- | 
| `admin` | `admin` | 


#### OCS Panel and OVPN Config

`
 http://123.123.123.123:85
 Note: Change 123.123.123.123 to your VPS IP Address
`

#### Activate OCS Panel Account Maker:
 Edit the index.php Put your root password in Line 45 of this directory:

`
 /home/vps/public_html/index.php
 Go to Line 45.
`

#### Important Notes:
`
Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules
`

## Command: menu
_Use this to access Project Fog Menu through vps terminal_
#





## Screenshots

![App Screenshot](https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/fog.png/)


##  Changelog
#### version 2.5.5
- Fixed OCS Panel not working issue. This issue has been resolved.
- Fixed V2ray Panel not working issue. This issue has been resolved.
- Fixed not working commands in V2ray Menu.
- Fixed Apache2 occupying port 80.
- Fixed compatibility issues with Debian 11+
- Fixed compatibility issue with Ubuntu 20+
- Update Webmin from version:1.979 to version:1.984.
- Added Expiry Date and Data Limit option per V2ray config created
- Added "Change Username and Password" in V2ray Menu.
- Optimize Autoscript commands.
#### version 2.5.6
- Resolved the issue where Openvpn Monitoring was not working in higher versions of Ubuntu(version20) and Debian(version11).
- Universal Installer `It will install a Project Fog stable version compatible with the OS and version of your VPS`


|  |
| :------- | 
| _Use this only if universal installer fails. See: Installation (for Universal Installer)_ | 
| `Debian 9 and Debian 10: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/deb255 && chmod +x ./deb255 && ./deb255` | 
| `Debian 11 and higher: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/deb256 && chmod +x ./deb256 && ./deb256` |
| `Ubuntu 18: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ub255 && chmod +x ./ub255 && ./ub255` | 
| `Ubuntu 20 and higher: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ub256 && chmod +x ./ub256 && ./ub256` |

### Known Bugs
V2ray Panel settings do not work. -You can change username and password in vps/server terminal.

`input: "menu" > "12" > "15" to change it.`


## Author

_If you have any feedback, please reach me out:_
- _www.facebook.com/kornip_
- _www.phcorner.net/members/blackestsaint.455497/_
- _https://t.me/blackestsaint_


`Do you want to contribute or donate? 
Great! I do not currently have a VPS or server. I would appreciate it if you could spare some of yours so that this project can continue.`


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
