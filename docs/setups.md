# Beginner's Guide for Project Fog Services

#### _Disclaimer: I am not an expert in configs making. it is only based on my experience and how I use it. Feel free to DM me if I have incorrect information. I will correct it. Do not believe me, but believe in yourself._

#
| Services | Platform | Client Apps | Dependant to other Services | Config Setups | Possible to use a BugHost? | Remarks | 
| :---: | :---: | :---: | :---: | :---: | :---: | :---: |
| Shadowsocks | Windows and Mobile | Many software supporting this service. | No | Use plugin like v2ray, xray etc. | Yes | abc |
| V2ray | Windows and Mobile | Many software supporting this service. | No | Recommended: vless | Yes | abc |
| OpenVPN UDP | Windows and Mobile | OpenVPN | No | - | No | abc |
| OpenVPN TCP | Windows and Mobile | OpenVPN | Yes | Openvpn + Remote Proxy + Payload Setups | Yes | abc |
| OpenSSH or Dropbear | Windows and Mobile | HTTP Injector, KPN and many more | Yes | SSH Direct, SSH + Remote Proxy + Payload Setups | Yes | abc |
| Stunnel | Windows and Mobile | HTTP Injector, KPN and many more | Yes | SSL + SNI, SSL + SNI + Payload Setups  | Yes | abc |
| L2TP / IPSec PSK | Mobile | Built-in VPN for Android and IOS | Yes | Mask IP to Bughost| Yes | abc |

#
## Important Reminders:
#### Payload Setups
_Same with " HTTP Proxies" and it will require " Remote Proxies "_
#

## Remote Proxy

Kinds of Remote Proxy
- Simple Remote Proxy
  - _Need "Correct and Valid" HTTP request in order server response Status 200_
- Direct Remote Proxy
  - _No need correct and valid http request. Allow all even invalid request and server autamtically response Status 200.

| Services | Method | Simple Remote Proxy | Direct Remote Proxy | Use Case |
| :---: | :---: | :---: | :---: |:---: |
| Squid | - | ✔ |  | Remote Proxy for SSH and OpenVPN |
| Privoxy | - | ✔ |  | Remote Proxy for SSH and OpenVPN |
| OHP | OHP over  SSH |  | ✔ | Remote Proxy for SSH|
| OHP | OHP over  SSL |  | ✔ | Remote Proxy for SSH |
| OHP | OHP over  OpenVPN |  | ✔ | Remote Proxy for Openvpn |
| Python Socks Proxy | Simple Socks Proxy | ✔| | Remote Proxy for SSH and OpenVPN |
| Python Socks Proxy | Direct Socks Proxy | | ✔ | Remote Proxy for SSH |
| Python Socks Proxy | OpenvPN Socks Proxy |  | ✔ | Remote Proxy for Openvpn |
