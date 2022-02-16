

# ☁️ Project Fog version 3.01 ☁️

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
- L2TP / IPSec and IKE2 
- Squid3​
- Privoxy​
- V2Ray Panel​
- OCS Panel​
- Openvpn Monitoring​
- Badvpn​
- Webmin​
- Cerbot
    - _with User Interface: Generate , Renew and Revoke Certificate_
- Shadowsocks​
  - Shadowsocks Version: libev | shadowsocks-rust | go-shadowsocks2 
  - Plugins included: v2ray-plugin, xray-plugin and many more . . .
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


 >http://123.123.123.123:54321
  Note: Change 123.123.123.123 to your VPS IP Address
  

#### V2ray Default User and Password
| Username | Password    | 
| :-------- | :------- | 
| `admin` | `admin` | 


#### OCS Panel and OVPN Config


> http://123.123.123.123:85
 Note: Change 123.123.123.123 to your VPS IP Address


#### Activate OCS Panel Account Maker:
 Edit the index.php Put your root password in Line 45 of this directory:


 >/home/vps/public_html/index.php
 Go to Line 45.


#### Important Notes:

>_Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules_


## Command: menu
_Use this to access Project Fog Menu through vps terminal_
#





## Screenshots

![App Screenshot](https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/version3.01.png/)


##  Changelog

#### version 3.01
- Removing Online Updates in menu.
- Improve Shadowsocks User  Interface
- Improve Webmin Installation, updating latest Webmin installer without touching autoscript.
- Added L2TP / IPSec and IKE2 
- Added User Interface for L2TP / IPSec and IKE2

#### version 3.0
- Removed Python Shadowsocks 
- Added Shadowsocks Installer
  - _Shadowsocks Version: libev | shadowsocks-rust | go-shadowsocks2_
  - _Plugins included: v2ray-plugin, xray-plugin and many more . . ._
  `all credits to loyess'
-  1-tap installation of Shadowsocks with Xray Plugin, all credits to Min3 for detailed steps.
-  Added Shadowsocks Menu (check your vps terminal and type: menu > 13)
-  Upgrade V2ray installation to prevent not working issues experienced in version 2.4 and to prevent possible same effect in versions 2.5 through 2.7.   
-  Rainbow texts in the menu have been removed due to high CPU usage in some cases.
#### version 2.5.6
- Resolved the issue where Openvpn Monitoring was not working in higher versions of Ubuntu(version20) and Debian(version11).
- Universal Installer `It will install a Project Fog stable version compatible with the OS and version of your VPS`
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




|  |
| :------- | 
| <p align="center">_Use this only if universal installer fails. See: Installation (for Universal Installer)_   </p> | 
| `Debian 9 & 10: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/debv301a && chmod +x ./debv301a && ./debv301a` | 
| `Debian 11 or higher: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/debv301b && chmod +x ./debv301b && ./debv301b` |
| `Ubuntu 18: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ubv301a && chmod +x ./ubv301a && ./ubv301a` | 
| `Ubuntu 20 or higher: wget https://github.com/korn-sudo/Project-Fog/raw/main/files/installer/ubv301b && chmod +x ./ubv301b && ./ubv301b` |

### Known Bugs
V2ray Panel settings do not work. -You can change username and password in vps/server terminal.

>_input: "menu" > "12" > "15" to change it._

## Frequently Asked Questions
 1. OCS Panel not working or cannot access the site.
>_OCS panel will not work if you install Shadowsocks or cancel the installation. Shadowsocks and OCS do not work together.
>If you want the OCS Panel back, go to "menu > "13" "3". This will bring back the OCS Panel settings._
2. Cannot access V2ray Panel Settings.
>_If your concern is to change the default username and password, go to your VPS terminal, go to "menu" > "12" > "15"._
3. How to access Webmin?
>_your_ip_address:10000 | username: root | password: your-root-password_

4.After reboot, some services are not available.
>_Yes, Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules._
5. Multilogin Restriction not working.
>_It will not work in v2ray, shadowsocks openvpn and IPSec._
6. Universal Installer does not work.
>_Install and choose the appropriate version for your vps already mentioned in the post._
7. How to determine if it can block torrents. 
>_The torrent restriction can be circumvented, but basic iptables rules are enough to block for normal users.
>Make a simulation of it. Without doing anything. Just trying to access torrent sites, it blocked._
>Check your VPS IPtable rules:
```bash
iptables -L
```
8. I can't access my vps.
>_This happens if you forcefully attempt to login with a number of wrong passwords. It will then lock._
9.Why are you sharing this project with the public?
>_Because I find it annoying when people sell scripts. Simple as that._
10. Will you always update your project?
>_No, After this version 3.01, I won't be able to update it since my virtual private server expired and I have a limited amount of time._




## Author

_If you have any feedback, please reach me out:_
- _www.facebook.com/kornips_
- _www.phcorner.net/members/blackestsaint.455497/_
- _https://t.me/blackestsaint_
  

>_Do you want to contribute or donate? 
Great! I do not currently have a VPS or server. I would appreciate it if you could spare some of yours so that this project can continue._



<p align="center">
 <img src="https://user-images.githubusercontent.com/76937659/153705961-79f5a170-5563-4f90-9423-f45c7011ac3f.gif" width="200" height="180" /> 
</p>


   <p align="center"> Credits to: PHC - Ford | Bon-Chan | lfasmpao | ADM-Manager | vaxilu | Min3 | loyess | WaGo-G | Ling Song |and PHC_JAYVEE_  </p>   
  <p align="center"> Special Thanks to: mhieqoh06, xFocus and Squid  </p>


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
