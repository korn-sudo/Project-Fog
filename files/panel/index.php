<?php

/////////////////////////////
/////////////////////////////

//FILL UP ALL VARIABLE [ $ ] | BASE TO YOUR DESIRE://
$site_name        = "Project Fog";
$site_description = "Premium Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ovpnmonitoring = "http://fogserverip:Fog_Openvpn_Monitoring"; // Openvpn Monitoring
$site_v2ray = "http://fogserverip:v2portas"; // v2ray ip and PORT
$site_config = "http://fogserverip:Nginx_Port/projectfog.html"; // list of config
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
$ovpn_client= ''.$hosts.'/config.zip';         		 // Client Config Zip File
$config_fog = "config.zip";				 // Zip File Name
$Nginx_Port= ":Nginx_Port";				 // Nginx Port

/////////////////////////////
/////////////////////////////

/* Server Data */
/* Variable = Server_Name, IP_Address, Root_Pass, Account_Validity */
/* Sample: 1=>array(1=>"Name of your Server 1","your-ip-address","server-or-root-password","5"), */

$server_lists_array=array(
			1=>array(1=>"VIP Server","fogserverip","server-or-root-password","5"),
			2=>array(1=>"Reserve 1 ","your-server-ip-2.here","server-or-root-password","5"),
			3=>array(1=>"Reserve 2","your-server-ip-3.here","server-or-root-password","5"),
	);			


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