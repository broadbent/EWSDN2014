<br />
<br />

	</div><!-- /ui-block-b -->
	
	</div><!-- /content -->


<!-- Search Functionality -->
<ul id="toolbar">
<li><a id="gpbtn" href="https://plus.google.com/s/sigcomm%202012" rel="external"></a></li>
<li><a id="fbbtn" href="http://www.facebook.com/groups/sigcomm2012/" rel="external"></a></li>
<li><a id="twbtn" href="https://twitter.com/?category=people#!/sigcomm12" rel="external"></a></li>
<li></li>
</ul>

<a id="csebtn" data-role="button" data-icon="search" data-iconpos="notext" data-theme="c" href="" onclick="show_searchbar();">SHOW</a>

<script type="text/javascript">
function show_searchbar() {
	$("#csebtn").toggleClass("ui-btn-up-c");
	$("#csebtn").toggleClass("ui-btn-up-e");
	if( $("#cse").css("display") == "none" )
	{
		$("#cse").css("display", "block");
		$("#gsc-i-id1").focus();
	}
	else
	{
		$("#cse").css("display", "none");
	}
}
</script>
  
<div id="cse" style="display:none; background-color:white; padding:1px 5px; -moz-border-radius: 10px; border-radius: 10px; ">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '012399979458248589958:lpem1r75tsw', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.SMALL_RESULTSET);
    customSearchControl.draw('cse');
    $("#gsc-i-id1").keyup(function () {
      customSearchControl.execute($("#gsc-i-id1").val());
    });
    $("#cse").focusout(function() {
    	if( $("#cse").css("display") == "block" ){
    	}
	});
  }, true);
</script>

<!-- Search Functionality -->


	<div id="logowht" style="height:5em;"></div>
<?php if ($page_title!="Supporters"): ?>
<div id="logobar" style="
     background-color:#E0E0E0; width:100%; height:auto; left:0; bottom:0;
     -moz-box-shadow:inset 0 0 7px #000000;
     -webkit-box-shadow:inset 0 0 7px #000000;
     box-shadow:inset 0 0 7px #000000;
">
</div>
<?php endif; ?>


<div style="diplay:none;">
<?php
	$jsstr = "sps = [\n";
	$supporters = array();
	$supporters["aalto"]	= array(50, "aalto.png", "http://www.aalto.fi/en/");
	$supporters["nokia"] 	= array(50, "nokia.png", "http://www.nokia.com/");
	$supporters["cisco"] 	= array(25, "cisco.png", "http://www.cisco.com/");
	$supporters["cisco"] 	= array(25, "helsinki.png", "http://www.hel.fi/hki/Helsinki/en/Etusivu");
	$supporters["ericsson"]	= array(25, "ericsson.png", "http://www.ericsson.com/");
	$supporters["nec"] 		= array(25, "nec.png", "http://www.nec.com/");
	$supporters["netapp"] 	= array(25, "netapp.png", "http://www.netapp.com/");
	$supporters["att"] 		= array(10, "att.png", "http://www.att.com/");
	$supporters["bell"] 	= array(10, "bell.png", "http://www.bell-labs.com/");
	$supporters["isoc"] 	= array(10, "isoc.png", "http://www.isoc.org/");
	$supporters["verisign"] = array(10, "verisign.png", "http://www.verisigninc.com/");
	$supporters["riverbed"] = array(10, "riverbed.png", "http://www.riverbed.com/");
	$supporters["tele"] 	= array(10, "tele.png", "http://www.tid.es/");
	$supporters["huawei"] 	= array(10, "huawei.png", "http://www.huawei.com/");
	$supporters["facebook"] = array(10, "facebook.png", "http://www.facebook.com/");
	$supporters["google"] 	= array(10, "google.png", "http://www.google.com/");
	$supporters["conviva"] 	= array(10, "conviva.png", "http://www.conviva.com/");
	//$supporters["akamai"] 	= array(5, "akamai.jpg", "http://www.akamai.com");
	//$supporters["comcast"] 	= array(5, "comcast.png", "http://www.comcast.com");
	$supporters["hp"] 		= array(10, "hp.png", "http://www.hp.com");
	$supporters["microsoftresearch"] = array(10,"microsoftresearch.png", "http://research.microsoft.com/");

	$numItems = count($supporters);
	$i = 0;
	foreach ($supporters as $supporter => $info)
	{
		list($money, $logo, $url) = $info;
		list($width, $height, $type, $attr)= getimagesize("images/$logo");
		echo "<input type='hidden' id='$supporter' data-width='$width' data-height='$height'>";
		echo "<img src='images/$logo' alt='cached' style='display:none;'>";
		$jsstr = "$jsstr\t[$money, \"$logo\", \"$url\", \"$supporter\", 0]";
		if($i < $numItems-1) {
		      $jsstr = "$jsstr,";
  		}
		$jsstr = "$jsstr\n";
		$i++;
	}

	$jsstr = "<script type=\"text/javascript\">\n$jsstr ];</script>";
	echo $jsstr;
?>
</div>

</div><!-- /page -->

</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31902726-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>