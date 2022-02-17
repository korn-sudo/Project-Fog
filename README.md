

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


_The version can be manually chosen for your virtual private server if universal installation fails._ See [Project Fog Versions](docs/fog-versions.md).
##

    
## Services
 - OpenSSH​
- Dropbear​
- OpenVPN TCP​
- OpenVPN UDP​
- L2TP / IPSec PSK and IKE2 
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






## Command: menu
_Use this to access Project Fog Menu through vps terminal_
#





## Screenshots

![App Screenshot](https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/version3.01.png/)










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


   <p align="center"> Credits to: PHC - Ford | Bon-Chan | lfasmpao | ADM-Manager | Crazy_vpn | vaxilu | Min3 | loyess | WaGo-G | Ling Song |and PHC_JAYVEE_  </p>   
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
