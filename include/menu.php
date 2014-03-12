<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/logo-menu.png" alt="EWSDN 2014, September 1-3, 2014, Budapest, Hungary" /></a>

		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a>

		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
			<li data-icon="false" <?php if ($mypage=="cfp.php") echo 'class="navselected"' ?> ><a href="cfp.php">Call for Papers</a></li>
			<li data-icon="false" <?php if ($mypage=="dates.php") echo 'class="navselected"' ?> ><a href="dates.php">Important Dates</a></li>
			<li data-icon="false" <?php if ($mypage=="venue.php") echo 'class="navselected"' ?> ><a href="venue.php">Venue</a></li>
			<li data-icon="false" <?php if ($mypage=="registration.php") echo 'class="navselected"' ?> ><a href="registration.php">Registration</a></li>
			<li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organizing Committee</a></li>

			<li class="navheader-a" data-icon="plus" data-theme="c" ><a href="#">Previous Editions</a></li>
			<li data-icon="false" class="subnav-a" data-theme="c"><a href="http://www.ewsdn.eu/ewsdn13.html">EWSDN 2013</a></li>
			<li data-icon="false" class="subnav-a" data-theme="c"><a href="http://www.ewsdn.eu/ewsdn12.html">EWSDN 2012</a></li>
		</ul>
	</div>
