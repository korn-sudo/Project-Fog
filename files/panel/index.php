<?php

/////////////////////////////
/////////////////////////////

//FILL UP ALL VARIABLE [ $ ] | BASE TO YOUR DESIRE://
$site_name        = "Project Fog";
$site_description = "Premium Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ovpnmonitoring = "http://fogserverip:Fog_Openvpn_Monitoring"; // Openvpn Monitoring
$site_v2ray = "http://fogserverip:v2portas"; // v2ray ip and PORT
$site_config = "http://fogserverip:NXPort/projectfog.html"; // list of config
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
$Nginx_Port= "NXPort";				 // Nginx Port

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



/* Dont Edit Anything After This Line*/

$git_korn = "https://github.com/korn-sudo/Project-Fog";



for ($row = 1;$row < 101;$row++) {
    if ($_POST['server'] == $server_lists_array[$row][1]) {
        $hosts = $server_lists_array[$row][2];
        $root_pass = $server_lists_array[$row][3];
        $expiration = $server_lists_array[$row][4];
        break;
    }
}
$error = false;
if (isset($_POST['user'])) {
    $username = trim($_POST['user']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);
    $password1 = trim($_POST['password']);
    $password1 = strip_tags($password1);
    $password1 = htmlspecialchars($password1);
    $nDays = $expiration;
    $datess = date('m/d/y', strtotime('+' . $nDays . ' days'));
    $password = escapeshellarg(crypt($password1));
    if (empty($username)) {
        $error = true;
        $nameError = "Please Enter A Username";
    } else if (strlen($username) < 3) {
        $error = true;
        $nameError = "Name Must Have Atleast 3 Characters.";
    }
    if (empty($password1)) {
        $error = true;
        $passError = "Please Enter A Password.";
    } else if (strlen($password1) < 3) {
        $error = true;
        $passError = "Password Must Have Atleast 3 Characters.";
    }
    if ($username == $password1) {
        $error = true;
        $ConfirmError = "Username and Password Should Not Be The Same ";
    }
    if (!$error) {
        date_default_timezone_set('UTC');
        date_default_timezone_set("Asia/Manila");
        $my_date = date("Y-m-d H:i:s");
        $connection = ssh2_connect($hosts, 22);
        if (ssh2_auth_password($connection, 'root', $root_pass)) {
            $check_user = ssh2_exec($connection, "id -u $username");
            $check_user_error = ssh2_fetch_stream($check_user, SSH2_STREAM_STDERR);
            stream_set_blocking($check_user_error, true);
            stream_set_blocking($check_user, true);
            $stream_check_user_error = stream_get_contents($check_user_error);
            $stream_check_user = stream_get_contents($check_user);
            if (!empty($stream_check_user)) {
                $ServerError = "Username Already Taken";
            } elseif (!empty($stream_check_user_error)) {
                $check_daily_limit = ssh2_exec($connection, "wc -l < /home/vps/public_html/daily_user_limit.txt");
                $check_daily_limit_error = ssh2_fetch_stream($check_user, SSH2_STREAM_STDERR);
                stream_set_blocking($check_daily_limit_error, true);
                stream_set_blocking($check_daily_limit, true);
                $stream_check_daily_limit_error = stream_get_contents($check_daily_limit_error);
                $stream_check_daily_limit = stream_get_contents($check_daily_limit);
                if ($stream_check_daily_limit >= $daily_limit_user) {
                    $ServerError = "Server Full, Try Again Tomorrow";
                } else {
                    $show = true;
                    ssh2_exec($connection, "useradd $username -m -p $password -e $datess -d  /tmp/$username -s /bin/false");
                    ssh2_exec($connection, 'echo "====================" >> /home/vps/public_html/daily_user_limits.txt');
                }
            }
        } else {
            die('Connection Failed...');
        }
    }
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />  
<title><?php echo $site_name; ?> | <?php echo $site_description; ?></title>
<meta name="description" content="<?php echo $site_description; ?>"/>
<meta property="og:type" content="website" />
<meta property="og:image" content="https://github.com/korn-sudo/Project-Fog/raw/main/files/panel/20210130_181134.jpg" alt="" height="300" width"500"/>
   <script language='JavaScript'>
        var txt = '   ' + document.title + '   '
        var speed = 400;
        var refresh = null;
        function site_name() 
			{
            		document.title = txt;
            		txt = txt.substring(1, txt.length) + txt.charAt(0);
            		refresh = setTimeout("site_name()", speed);
        	}
        site_name();     
    </script>
<link rel="shortcut icon" type="image/x-icon" href="https://github.com/korn-sudo/Project-Fog/raw/main/files/panel/foggy.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/<?php echo $site_template; ?>/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<a class="navbar-brand" href="/">
  <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/panel/foggy.png" width="30" height="30" class="d-inline-block align-top" alt="">
  <?php echo $site_name; ?>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

<li class="nav-item active">
<a class="nav-link" href="<?php echo $site_ovpnmonitoring; ?>"target="_blank">   Openvpn Monitoring <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item active">
<a class="nav-link" href="<?php echo $site_v2ray; ?>"target="_blank">   V2ray Panel <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item active">
<a class="nav-link" href="<?php echo $site_config; ?>"target="_blank">  Configuration List <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item active">
<a class="nav-link" href="<?php echo $git_korn; ?>"target="_blank">  Github <span class="sr-only">(current)</span></a>
</li>



</nav>		
</header>
	<div align="center">
      <img src="https://github.com/korn-sudo/Project-Fog/raw/main/files/panel/fog.gif" alt="" height="200" width"200"/>
    	<div class="col-md-4" align="center">
			<form method="post" align="center" class="softether-create">
						<div class="form-group">												
							<?php
if ($show == true) {
    echo '<div class="card alert-success">';
    echo '<table class="table-success">';
    echo '<tr>';
    echo '<td> </td>';
    echo '<td> </td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Host | IP:</td>';
    echo '<td>';
    echo $hosts;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Username:</td>';
    echo '<td>';
    echo $username;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Password:</td>';
    echo '<td>';
    echo $password1;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>SSH Port:</td>';
    echo '<td>';
    echo $port_ssh;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Squid Port:</td>';
    echo '<td>';
    echo $port_squid;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Privoxy Port:</td>';
    echo '<td>';
    echo $port_privoxy;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Dropbear Port:</td>';
    echo '<td>';
    echo $port_dropbear;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>OHP through Squid:</td>';
    echo '<td>';
    echo $port_ohp_sq;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>OHP through Privoxy:</td>';
    echo '<td>';
    echo $port_ohp_pr;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>OHP through Openvpn:</td>';
    echo '<td>';
    echo $port_ohp_ov;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>SSL through Dropbear:</td>';
    echo '<td>';
    echo $port_ssl_dp;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>SSL through OpenSSH:</td>';
    echo '<td>';
    echo $port_ssl_ssh;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>SSL through Openvpn:</td>';
    echo '<td>';
    echo $port_ssl_ovpn;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Python Simple Socks Proxy:</td>';
    echo '<td>';
    echo $port_psp_sim;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Python Direct Socks Proxy:</td>';
    echo '<td>';
    echo $port_psp_dir;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Python Openvpn Socks Proxy:</td>';
    echo '<td>';
    echo $port_psp_ov;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>OpenVPN Config:</td>';
    echo '<td>';
    echo '<a href="http://fogserverip:NXPort/$config_fog';
    echo '">download config</a>';
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td align=center>Expiration Date:</td>';
    echo '<td>';
    echo $datess;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td> </td>';
    echo '<td> </td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
}
?>
						</div>
						<div class="form-group">
							<div class="alert-danger">
								<span class="text-light"><?php echo $ServerError; ?></span>
							</div>					
							<div class="alert-danger">
								<span class="text-light"><?php echo $nameError; ?></span>
							</div>
							<div class="alert-danger">
								<span class="text-light"><?php echo $passError; ?></span>
							</div>
							<div class="alert-danger">
								<span class="text-light"><?php echo $ConfirmError; ?></span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">									
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-globe" style="color:green;"></i></span>
								</div>
								<select class="custom-select" name="server" required>
									<option disabled selected value>Choose Server</option> 
											<?php
for ($row = 1;$row < 101;$row++) {
    if (!empty($server_lists_array[$row][1])) {
        echo '<option>';
        echo $server_lists_array[$row][1];
        echo '</option>';
    } else {
        break;
    }
}
?>
										</optgroup>														
								</select> 
							</div>
						</div>															
						<div class="form-group">								
							<div class="input-group">									
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user-circle" style="color:green;"></i></span>
								</div>
									<input type="text" class="form-control" id="username" placeholder="Username" name="user" autocomplete="off" >
							</div>
						</div>
						<div class="form-group">								
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key" style="color:green;"></i></span>
								</div>
									<input type="text" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off"  >
							</div>						
						</div>						
										
						<div class="form-group ">
							<button type="submit" id="button" class="btn btn-success btn-block btn-action">CREATE ACCOUNT</button>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
</body>
</html>