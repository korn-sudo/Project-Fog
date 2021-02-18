![](https://komarev.com/ghpvc/?username=korn-sudo&color=green)
<h1 align="center">☁️☁️☁️ Project Fog ☁️☁️☁️ </h1>
 <p align="center"> <img src="https://img.shields.io/badge/Version-2.3.2-pink.svg" </p>
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
<br>1. sudo su
<br>2. wget https://github.com/korn-sudo/Project-Fog/raw/main/fog-ubuntu && chmod +x ./fog-ubuntu && ./fog-ubuntu


<h3 align="center">Screenshots</h3>
<p align="center">
<img src="https://phcorner.net/attachments/1613046228263-png.1297707/" width=300 height=600 >
<img src="https://phcorner.net/attachments/screenshot_20210211-183356_chrome-jpg.1297712/" width=300 height=600 >
 <img src="https://phcorner.net/attachments/1613383892218-png.1302954/" width=300 height=600 >
</p>

<br>
<br>Features:
<br>★ Auto delete expired user account
<br>★ Auto disconnect multilogin users (Openvpn not included).
<br>★ Auto configure firewall every reboot(Protection for torrent and etc..)
<br>★ Auto updated firewall(if port change, removed or add, firewall will adapt your new port)
<br>★ Auto updated OHP(Over-HTTP-Puncher)working even there's changes in ports
<br>★ Auto updated Python Socks Proxy. Working even there's changes in ports
<br>★ Edit/Change/Off/On your OHP Port and Python Socks (see in menu option)
<br>★ Torrent Protection [ add newest torrent port]
<br>★ Port Scanner Basic Protection
<br>★ Brute Force Attack Basic Protection
<br>★ Multi-login Limit customize per user (see menu).
<br>★ Webmin installed version 1.970 [up to date]
<br>
<br>How to access V2Ray Panel:
<br>Go to your browser and type: http://your-ip-address-vps:65432
<br>Username: admin | Password: admin
<br>
<br>Note: Panel Settings not working.
<br>Change Panel Port through VPS Menu if you don't others to access your Panel.
<br>
<br>How to access OCS Panel and OVPN Config:
<br>Go to your browser and enter this link:
<br>http://123.123.123.123:85
<br>Change 123.123.123.123 to your VPS IP Address
<br>
<br>To Enable OCS Panel, you must edit the index.php | Directory Path: /home/vps/public_html/index.php
<br>Put your root password in Line 45 of /home/vps/public_html/index.php
<br>
<br>Version 2.3.2 Changelog:
<br>Fix bugs in openvpn monitoring.
<br>Added Support for Ubuntu Distros.

