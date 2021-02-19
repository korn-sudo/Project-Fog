<?php

/////////////////////////////
/////////////////////////////

//FILL UP ALL VARIABLE [ $ ] | BASE TO YOUR DESIRE://
$Nginx_Port= "NXPort";	// Nginx Port
$site_name        = "Project Fog";
$site_description = "Premium Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ovpnmonitoring = "http://fogserverip:Fog_Openvpn_Monitoring"; // Openvpn Monitoring
$site_v2ray = "http://fogserverip:v2portas"; // v2ray ip and PORT
$site_config = "http://fogserverip:NXPort/projectfog.html"; // list of config
$config_zips = "http://fogserverip:NXPort/config.zip"; // ovpn zip check it on /home/vps/public_html
$daily_limit_user = "50"; // set daily limit

/////////////////////////////
/////////////////////////////

//Double Check if correct. Update anything not correct.
$port_ssh= 'SSH_Port1 | SSH_Port2'; 		   	 // SSH Ports
$port_dropbear= 'Dropbear_Port1 | Dropbear_Port2';  	 // Dropbear Ports
$port_ssl_dp= 'Stunnel_Port1';                    	 // SSL through Dropbear
$port_ssl_ssh= 'Stunnel_Port2';                    	 // SSL through OpenSSH
$port_ssl_ovpn= 'Stunnel_Port3';                    	 // SSL through Openvpn
$port_squid= 'Squid_Port1 | Squid_Port2 | Squid_Port3';  // Squid Ports
$port_privoxy= 'Privoxy_Port1 | Privoxy_Port2'; 	 // Privoxy Ports
$port_ohp_sq= 'OHP_Port1 | OHP_Port2';  		 // OHP through Squid
$port_ohp_pr= 'OHP_Port3 | OHP_Port4';  		 // OHP through Privoxy
$port_ohp_ov= 'OHP_Port5';  				 // OHP through Openvpn
$port_psp_sim= 'Simple_Port1 | Simple_Port2';  		 // Python Simple Socks Proxy
$port_psp_dir= 'Direct_Port1 | Direct_Port2';  		 // Python Direct Socks Proxy
$port_psp_ov= 'Open_Port1 | Open_Port2';  		 // Python Openvpn Socks Proxy
$config_fog = "config.zip";				 // Zip File Name for your OVPN Config /Default: config.zip


/////////////////////////////  
/////////////////////////////
//  SHARPEN YOUR EYES!! READ PATTERN BELOW AND EDIT LINE 45,46,47,ETC
/* Server Data */
/* Variable = Server_Name, IP_Address, Root_Pass, Account_Validity */
/* Sample: 1=>array(1=>"Name of your Server 1","your-ip-address","server-or-root-password","5"), */

$server_lists_array=array(
			1=>array(1=>"VIP Server","fogserverip","server-or-root-password","5"),
			2=>array(1=>"Reserve 1 ","your-server-ip-2.here","server-or-root-password","5"),
			3=>array(1=>"Reserve 2","your-server-ip-3.here","server-or-root-password","5"),
	);			

/////////////////////////////
/////////////////////////////



//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
////////////// DONT EDIT CERTIFICATE BELOW  //////////////
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
//ySFq7OTEwsp50s/wCXAgtgZ6pmhjGxWCIhTvX+zKbtDg71kFXVGUxBRNazoHvzqoXQoxkSYA2VUmRUG1I0aA7RQXLYkz0JBBrUbhC8JtChjy4N8s7q3DD0d7JVmD49Dt9Pp1JdTp9NDPpLYBg0aDRf+O064kHoceRD9cDUAUm1P0yMALX/JYL+ihydUWgkrmLAWLqEQxSHUoAY260vP0eDsrJa1TjhDA+rO0NUWh6DIhGoPtshTFnFYT6OQIhHJVZSRNLJHhLhqth5YAc3XU8kSJ8nc8b3Eqnin81lpjJw21QSUUvewOEZ0AdUtGJH5ROwptXdgxqAQY587fafvrq0aCsVBBmxNLhm34mplAQKCYFsIkEqdJSwSNuMBcV+lG0txWBa40x+cE6d/5oI8l3JMKbeI6YBRKzkRjrnz6Y+Qk7mSoS/tM+cM0AeQuBWwQsBia6hIQ+x9Cpwow268hBZbI2+f2J2biQVLGvuwyE6QC1Ns7vzdDfO4HNxFw3BJlwNgZwDugpq6ck48MuW7Uk332BRSGXmhIwsuF7AI9ZfN7yA2bztYyoGYkXu0VSCkooh4e7I6q70gwEU6yrVxmhiKPKnP4nhQR6cqmbbMFHOVQ29baxA/3EnVH+Q6kWs2xX6Z9hSoWvsF2IXBv1JVKXGb+uQoIMg4KUqhprFxcMmKeyMrwkzGfKgvim5TErlb/lqLuNQSYWuOQkEBDxHMlmye4KxF01OjXcHjkaWLFz2asYVcIZpOOlYk6uhVBTowtMPXTFBTApDI+epswEgsqlUop0S6fjUtEbcDBf4weHWUoZUTG21xjGV3n8p/TG+fALFc4ga1DT7IEYMcP+XNuLJyMihwd81ka
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>