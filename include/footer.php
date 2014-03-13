	</div><!-- /ui-block-b -->
		<?php include ("menu.php"); ?>
	</div><!-- /content -->

<div class="license">
The <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">EWSDN 2014 Website</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>. Original design is available at <a href="https://github.com/ryanrhymes/SIGCOMM2012">github.com</a>.
</div>

</div><!-- /page -->

</body>

</html>

<?php
	# Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
	# http://michelf.com/projects/php-smartypants/
	print SmartyPants(ob_get_clean());
?>
