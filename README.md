![](https://komarev.com/ghpvc/?username=korn-sudo&color=green)
<h1 align="center">☁️☁️☁️ Project Fog ☁️☁️☁️ </h1>
 <p align="center"> <img src="https://img.shields.io/badge/Version-2.3.0-pink.svg" </p>
<br>  

<p align="center">
Project Fog is VPS AutoScript for Debian and Ubuntu Distros. 
<br> Contains pre-installed tunneling application. Read below all supported application.
  </p>
  <br>  
  
<p align="center">
  Credits to:
PHC-Ford [FordSenpai] 🐱 |
Bon-chan 🦢 |
lfasmpao 🐯 |
ADM-Manager 🐬 |
Sprov 🌤️ |
WaGo-G 🔥
  </p>

<h3 align="center">Supported Linux Distro:</h3>
<p align="center">
  <a><img src="https://img.shields.io/badge/Support-Debian%209-red.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Debian 10-red.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Ubuntu 18-blue.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Ubuntu 20-blue.svg"></a>
</p>

<h3 align="center">Services</h3>
<p align="center">
  <a><img src="https://img.shields.io/badge/Service-OpenSSH-green.svg" ></a>
  <a><img src="https://img.shields.io/badge/Service-Dropbear-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Stunnel-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OpenVPN TCP-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OpenVPN UDP-green.svg"></a>
 <a><img src="https://img.shields.io/badge/Service-Squid3-green.svg"></a>
  <p align="center">
  <a><img src="https://img.shields.io/badge/Service-Privoxy-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OHP-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Python Socks Proxy-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Shadowsocks-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-V2Ray-green.svg"></a>
   <a><img src="https://img.shields.io/badge/Service-OCS Panel-green.svg"></a>
  </p>
  
<h3 align="center">Commands</h3>
<p align="center">
   <a><img src="https://img.shields.io/badge/ Commands:-menu-yellow.svg"></a>
  </p>

<h3 align="left">Installation:</h3>
For Debian:
<br>1. sudo su
<br>2. wget https://github.com/korn-sudo/Project-Fog/raw/main/fog-debian && chmod +x ./fog-debian && ./fog-debian
<br>
<br>For Ubuntu:
<br> Coming soon . . .

<h3 align="center">Screenshots</h3>
<p align="center">
<img src="https://phcorner.net/attachments/2-jpg.1215844/" width=400 height=600 >
<img src="https://phcorner.net/attachments/v5-jpg.1207251/" width=400 height=600 >
</p>
   


<br>
<br>Automated Features:
<br>★ Auto delete expired user account
<br>★ Auto disconnect multilogin users (Openvpn not included).
<br>★ Auto configure firewall every reboot(Protection for torrent and etc..)
<br>★ Auto Reconnect features (see menu)
<br>★ Auto updated firewall(if port change, removed or add, firewall will adapt your new port)
<br>★ Auto updated OHP(Over-HTTP-Puncher)working even there's changes in ports
<br>★ Auto updated Python Socks Proxy. Working even there's changes in ports
<br>
<br>Notes:
<br>★ Edit/Change/Off/On your OHP Port (see in menu option)
<br>★ Torrent Protection [ add newest torrent port]
<br>★ Port Scanner Basic Protection
<br>★ Brute Force Attack Basic Protection
<br>★ Customized timer for auto reconnect.(see menu)
<br>★ All ports can be edit. ... And OHP and Python Socks Proxy still work. [OHP will Python Socks adapt your new port]
<br>★ Choose between Squid or Privoxy for Auto Reconnect(see menu).
<br>★ Multi-login Limit customize per user (see menu).
<br>★ Notification 0f Auto-Reconnect Status (see menu).
<br>★ To display list of commands: [ menu ] or [ menu fog ]
<br>★ Server running Openvpn both TCP and UDP protocol
<br>★ To download Openvpn config: http://your-vps-address [make sure its not https]
<br>
<br>
<br>

<br>Changelog:
<br>Fixed Issues encountered in ver.2.0:
<br>1. Confusing Reboot Schedule due to wrong Timezone fix.
<br>2. Stunnel minor issues fix.
<br>3. Typo error in Edit Port fix.
<br>
<br>
<br>Newly Added:
<br>V2Ray Panel
<br>
<br>How to Access V2ray Panel:
<br>Go to your browser and type: http://your-ip-address-vps:65432
<br>Username: admin
<br>Password: admin
<br>
<br>Other Settings of V2Ray are can be access to your VPS Menu.
<br>
<br>Note: Panel Settings not working.
<br>Change Panel Port through VPS Menu if you dont others to access your Panel.
<br>
<br>
<br>Note: im not the author or who make the V2ray Panel.
<br>All credits to Sprov of Github
<br>
<br>
<br>Version 2.2.0 Changelog:
<br>Add New option in Main Menu [ Others ]
<br>Others Menu Contain Following:
<br>A. One-tap Allow New port in IPTABLES
<br>[ V2Ray Panel not trigger my Auto allow for New port in IPTABLES ] so i made this.
<br>B. Option for TCP Speed Tweak can now On or OFF, see in Menu >> Others.
<br>C. Auto Reconnect move to Others.
<br>D. Installation Log included again
<br>E. Uninstaller [Remove all Project Fog Services and Files ], [Note: Only works in Project Fog ]

<br>Version 2.3.0 Changelog:
<br> 1. Fix No Menu in Vultr Host
<br> 2. Added Built-in OCS Panel
<br> To access OCS Panel: http://your-VPS-ip:85
<br> Note:
<br> To Enable OCS Panel, you must edit the index.php
<br> Directory Path: /home/vps/public_html/index.php
<br>
<br> 3. Added OpenVpn Monitoring Panel
<br> 4. Added Generating Certificate for V2Ray TLS | Menu > Other > 5
<br> 5. Added Revoking Certificate V2Ray TLS  | Menu > Other > 6
<br> 6. Added Renewal Certificate V2Ray TLS  | Menu > Other > 7




