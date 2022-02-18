# Beginner's Guide for Project fog Services

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

#
## Important Reminders:
#### Payload Setups
_Same with " HTTP Proxies" and it will require " Remote Proxies "_
#
