<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE HTML>
<html lang="en">

<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<title>contact | stam66's stuff</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/eclipse/consolidated.css?rwcache=747343265" />
		
	
	
	
	
	
	
	<noscript>
		<style>
			#contentWrapper #fs,
			#sidebar #fs,
			#contentWrapper div[id*='myExtraContent'],
			#sidebar div[id*='myExtraContent'] {
				display: block;
			}
		</style>
	</noscript>
	
	
	
	<!-- 
		Website published using the free Eclipse theme designed and coded by Will Woodgate, https://willwoodgate.com 
		Version 4.1.0
		July 2021
	-->
</head>

<body class="hasBootstrap hasFreeStyle themeFlood">
	<div id="pageWrapper">
		<div id="wrapperOuter">
			<main id="main">
				<div id="extraContainer1"></div>
				<header id="header">
					<div id="headerContentWrap">
						<div id="bootstrapNavBarWrapper">
							<div id="navContent" class="noprint">
								<div id="mainNavButton" class="menu-closed">
									<i class="fas fa-bars"></i>
									<i class="fas fa-minus"></i>
									<div id="mobileToggleLabel"></div>
								</div>
								<nav id="mainNav" class="menu-closed">
									<ul class="toolbarList"><li class="normalListItem"><a href="../index.html" rel="" class="normal">blog</a></li><li class="normalListItem"><a href="../markdown/index.html" rel="" class="normal">about</a></li><li class="currentListItem"><a href="index.php" rel="" class="current">contact</a></li></ul>
								</nav>
							</div>
						</div>
						<div id="extraContainer2"></div>
					</div>
					<div class="bootstrapClearer"></div>
				</header>
				<div id="extraContainer3"></div>
				<div id="topBar"></div>
				<div id="extraContainer4"></div>
				<div id="banner">
					<div id="banner_gradient"></div>
					<div id="banner_content">
						<div id="extraContainer5"></div>
						<div id="siteLogo"><a href="https://stam66.github.io/"></a></div>
						<div id="extraContainer6"></div>
						<h1><a href="https://stam66.github.io/">stam66's stuff</a></h1>
						<div id="extraContainer7"></div>
						<p class="lead">code and random stuff</p>
						<div id="extraContainer8"></div>
					</div>
				</div>
				<div id="extraContainer9"></div>
				<div id="contentContainer">
					<div id="content" role="main">
						<div id="contentWrapper">
							
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

							<div class="bootstrapClearer"></div>
						</div>
					</div>
					<aside id="aside">
						<div id="extraContainer10"></div>
						<div id="blockNav"><ul class="toolbarList"><li class="normalListItem"><a href="../index.html" rel="" class="normal">blog</a></li><li class="normalListItem"><a href="../markdown/index.html" rel="" class="normal">about</a></li><li class="currentListItem"><a href="index.php" rel="" class="current">contact</a></li></ul></div>
						<div id="extraContainer11"></div>
						<div id="sidebarWrapper">
							<div id="sidebarTitle">
								<h3>&nbsp;</h3>
							</div>
							<div id="sidebarContent">
								<div id="sidebar"></div>
								<div id="pluginSidebar"></div>
								<div id="extraContainer12"></div>
							</div>
						</div>
					</aside>
					<div class="bootstrapClearer"></div>
				</div>
				<div id="extraContainer13"></div>
				<div id="extraContainer14"></div>
				<footer id="footer">
					<div id="footerContent">
						<div id="extraContainer15"></div>
						<div id="breadcrumb"></div>
						<div id="extraContainer16"></div>
						<div id="footerNav"><ul class="toolbarList"><li class="normalListItem"><a href="../index.html" rel="" class="normal">blog</a></li><li class="normalListItem"><a href="../markdown/index.html" rel="" class="normal">about</a></li><li class="currentListItem"><a href="index.php" rel="" class="current">contact</a></li></ul></div>
						<div id="extraContainer17"></div>
						<div id="lastUpdated">06/09/2024<br /></div>
						<div id="extraContainer18"></div>
						<div id="footerText"></div>
						<div id="extraContainer19"></div>
						<!-- Credit to remain on display, unedited and intact at ALL TIMES unless you have previously paid and been granted permission / a license to remove it. This theme is copyright -->
						<div id="eclipseCopyright">Web design by <a href="https://themeflood.com">Will Woodgate</a></div>
						<div id="extraContainer20"></div>
					</div>
				</footer>
			</main>
		</div>
	</div>
	<script src="../rw_common/themes/eclipse/javascript.js?rwcache=747343265"></script>
	<script src="../rw_common/themes/eclipse/scripts/jquery-3.6.0.min.js?rwcache=747343265"></script>
	<script src="../rw_common/themes/eclipse/scripts/scripts.js?rwcache=747343265"></script>
	<script src="../rw_common/themes/eclipse/custom.js?rwcache=747343265"></script>
	
</body>

</html>
