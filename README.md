
<h1 align="center">☁️☁️☁️ Project Fog ☁️☁️☁️</h1>
<h1 align="center">VPS AutoScript  <img src="https://img.shields.io/badge/Version-1.0-orange.svg"></h1>

<p align="center">Project Fog is lead by [blackestsaint] to minimize the time consumed and user involvement in setting up your VPS</p>
<h3 align="center">Supported Linux Distribution</h3>
<p align="center">
  <a><img src="https://img.shields.io/badge/Support-Debian%209-red.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Debian 10-red.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Ubuntu 16-blue.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Ubuntu 18-blue.svg"></a>
  <a><img src="https://img.shields.io/badge/Support-Ubuntu 20-blue.svg"></a>
</p>
<h3 align="center">Services</h3>
<p align="center">
  <a><img src="https://img.shields.io/badge/Service-OpenSSH-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Dropbear-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Stunnel-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OpenVPN TCP-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OpenVPN UDP-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Squid3-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-Privoxy-green.svg"></a>
  <a><img src="https://img.shields.io/badge/Service-OHP-green.svg"></a>
  
 </p>
<h3 align="center">Commands</h3>
<p align="center">
  <a><img src="https://img.shields.io/badge/Commands-menu-yellow.svg"></a>
  <a><img src="https://img.shields.io/badge/Commands-fog-yellow.svg"></a>
  
 </p>

<h3 align="center">Installation</h3>

<p align="center">
   1. sudo su
  </p>
 <p align="center">
  
2. wget https://github.com/korn-sudo/Project-Fog/raw/main/fog-obs && chmod +x ./fog-obs && ./fog-obs
  </p>



<h3 align="center">Screenshots</h3>
<p align="center">
<img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/1.%20menu-welcome.jpg">
   </p>
  <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/2.%20menu.jpg">
   </p>
  <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/3.%20menu-color.jpg">
  </p>
  <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/4.%20OHP%20setting.jpg">
   </p>
    <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/5.%20auto-reconnect%20settings.jpg">
   </p>
    <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/6.%20inst-log.jpg">
   </p>
    <p align="center">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/screenshots/7.%20inst-log%20color.jpg">
   </p>
   
   
   Server Information: 
   • Fail2Ban       : [ON]
   • IPtables       : [ON]
   • Auto-Reboot    : [ON] Every 04:10am 
   • TCP Speed Tweak: [ON] 
   • Squid Cache    : [ON]
   • IPv6           : [OFF]
 
Automated Features:
   • Auto delete expired user account
   • Auto restart server 
   • Auto disconnect multilogin users (Openvpn not included).
   • Auto configure firewall every reboot(Protection for torrent and etc..)
   • Auto Reconnect features (see menu)
   • Auto updated firewall(if port change,removed or add,firewall will adapt your new port)
   • Auto updated OHP(Over-HTTP-Puncher)working even there's changes in ports
 
Application & Port Information:
   • OpenVPN              : [ON] 
   • Dropbear             : [ON] 
   • Squid Proxy          : [ON] 
   • Privoxy              : [ON] 
   • Stunnel/SSL          : [ON] 
   • OHP (through Squid)  : [ON]  
   • OHP (through Privoxy): [ON] 
   • OHP (through Openvpn): [ON]  
   • BADVPN               : [ON] 
   • Additional SSHD Port : [ON] 

Notes:
  ★ Edit/Change/Off/On your OHP Port (see in menu option) 
  ★ Torrent Protection [ add newest torrent port] 
  ★ Port Scanner Basic Protection  
  ★ Brute Force Attack Basic Protection  
  ★ Customized timer for auto reconnect.(see menu) 
  ★ All ports of Squid, Dropbear, SSH, Openvpn can be edit.   ... And OHP still work. [OHP will adapt your new port] 
  ★ Choose between Squid or Privoxy for Auto Reconnect(see menu). 
  ★ Multi-login Limit customize per user (see menu). 
  ★ Notification 0f Auto-Reconnect Status (see menu). 
  ★ To display list of commands:  [ menu ] or [ menu fog ] 
  ★ Server running Openvpn both TCP and UDP protocol
  ★ To download Openvpn config: http://your-vps-address
  ★ Other concern and questions of these auto-scripts?
    Direct Messege : www.facebook.com/kornips

