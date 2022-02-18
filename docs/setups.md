# _Beginner's Guide for Project Fog Services_

#### _Disclaimer: I am not an expert in configs making. it is only based on my experience and how I use it. Feel free to DM me if I have incorrect information. I will correct it._

#
| Services | Platform | Client Apps | Dependant to other Services | Config Setups | Possible to use a BugHost? | 
| :---: | :---: | :---: | :---: | :---: | :---: | 
| Shadowsocks | Windows and Mobile | Many software supporting this service. | - | Use plugin like v2ray, xray etc. |  ✔ | 
| V2ray | Windows and Mobile | Many software supporting this service. | - | Recommended: vless |  ✔ |
| OpenVPN UDP | Windows and Mobile | OpenVPN | -  | - | - | 
| OpenVPN TCP | Windows and Mobile | OpenVPN |  ✔ | Openvpn + Remote Proxy + Payload Setups |  ✔ | 
| OpenSSH or Dropbear | Windows and Mobile | HTTP Injector, KPN and many more |  ✔ | SSH Direct, SSH + Remote Proxy + Payload Setups |  ✔ | 
| Stunnel | Windows and Mobile | HTTP Injector, KPN and many more |  ✔ | SSL + SNI, SSL + SNI + Payload Setups  |  ✔ | 
| L2TP / IPSec PSK | Mobile | Built-in VPN for Android and IOS |  ✔ | Mask IP to Bughost |  ✔ | 

#
## _Remote Proxy_

#### Kinds of Remote Proxy
- Simple Remote Proxy
  - _Need "Correct and Valid" HTTP request in order server response Status 200_
- Direct Remote Proxy
  - _No need correct and valid http request. Allow all even invalid request and server autamtically response Status 200._

## _Project Fog Services Remote Proxy Summary_
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



#
## _Important Reminders_
#### Payload Setups
_Same with " HTTP Proxies" and it will require " Remote Proxies "_
#
#### Bughost
_Same with "Payload"_
#
#### Payload and Remote Proxy
_This is the key to the gate of free internet, which is why these two items are very important in all setups._

#
