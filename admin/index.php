<?php
require "../configs.php";
if( isset($_SESSION['username']) ) header("Location: dashboard.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AquaFlame CMS Admin Panel</title>
    <link href="font/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input").uniform();
		$('.sign').click(function(){
			$('.message').fadeIn();
		})
		$('.message').click(function(){
			$('.message').fadeOut();
		})
      });
    </script>
    <link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body>
<div id="login">
      <div id="log-Sup">
    <div id="logWrap">

          <h1><img src="../wow/static/images/logos/wof-logo.png" height="21px" width="260px"/><br />
        <span>Admin Login Panel</span></h1>
          <div id="LogPannel">
        <h2>Administrator Login</h2>
        <form method="post" action="dashboard.php">
              <input name="username" type="text" value="Username" onfocus="if(this.value=='Username')this.value=''" onblur="if(this.value=='')this.value='Username'" />
              <input name="password" type="password" value="password" onfocus="if(this.value=='password')this.value=''" onblur="if(this.value=='')this.value='password'" />
              <input name="submit" type="submit" value="LOGIN" />
              <label>
            <input type="checkbox" />
          </label>
              <p>Remember Me</p>
              <p><a class="sign">Forgot Password</a>?</p>
            </form>
        <div class="message">
              <p>Just click <strong>login</strong> to go forward.</p>
        </div>
      </div>
        </div>
  </div>
      <div class="push"></div>
    </div>
<div id="foot">
      <p> All rights reserved.  |  Powered by: <a href="" target="_blank"><font color="#15509E">AquaFlame CMS</font></a> | Admin Cp By Raffa50 (Aldrigo Raffaele)</p>
    </div>
</body>
</html>
