# Frequently Asked Questions

#
 1. OCS Panel not working or cannot access the site.
>_OCS panel will not work if you install Shadowsocks or cancel the installation. Shadowsocks and OCS do not work together.
>If you want the OCS Panel back, go to "menu > "13" "3". This will bring back the OCS Panel settings._

#
2. Cannot access V2ray Panel Settings.
>_If your concern is to change the default username and password, go to your VPS terminal, go to "menu" > "12" > "15"._

#
3. How to access Webmin?
>_your_ip_address:10000 | username: root | password: your-root-password_

#
4. After reboot, some services are not available.
>_Yes, Wait 30 seconds to 1 minute after a server reboot to load all tunneling software and to apply all IPTABLES rules._

#
5. Multilogin Restriction not working.
>_It will not work in v2ray, shadowsocks openvpn and IPSec._

#
6. Universal Installer does not work.
>_Install and choose the appropriate version for your vps already mentioned in the post._

#
7. How to determine if it can block torrents. 
>_The torrent restriction can be circumvented, but basic iptables rules are enough to block for normal users.
>Make a simulation of it. Without doing anything. Just trying to access torrent sites, it blocked._
>Check your VPS IPtable rules:
```bash
iptables -L
```
#

8. I can't access my vps.
>_This happens if you forcefully attempt to login with a number of wrong passwords. It will then lock._
#

9. Why are you sharing this project with the public?
>_Because I find it annoying when people sell scripts. Simple as that._
#

10. I installed Project Fog correctly, but the services do not display or work?
> - _Please open all ports in order for Project Fog to work properly._
> - _Don't worry about the open port; it will only be open temporarily while the project fog is being installed. It will be automatically closed after installation._
> - To verify all open and closed port: Go to your vps terminal or command line then type: iptables -L or just go to your Webnin (ip:10000)
#

11. Will you always update your project?
>_No, After this version 3.01, I won't be able to update it since my virtual private server expired and I have a limited amount of time._
