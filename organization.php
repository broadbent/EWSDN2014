<?php
        $page_title="Organizing Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organizing Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chair</li>
	<?php
		add_listitem("Hagen Woesner", "BISDN, Germany", "");
	?>

	<li data-role="list-divider">Technical Program Committee Co-Chairs</li>
	<?php
		add_listitem("Holger Karl", "University Paderborn, Germany", "");
		add_listitem("R&oacute;bert Szab&oacute;", "Ericsson, Hungary", "");
	?>

	<li data-role="list-divider">Industrial Track Chair</li>
	<?php
		add_listitem("Diego R. Lopez", "Telefonica I+D, Spain", "");
	?>

	<li data-role="list-divider">Publicity Chair</li>
	<?php
		add_listitem("Stefan Schmid", "TU Berlin / Telekom Innovation Laboratories, Germany", "");
		add_listitem("Pontus Sk&ouml;ldstr&ouml;m", "T Acreo AB, Sweden", "");
	?>

	<li data-role="list-divider">Workshop Operations Chair and Web Chair</li>
	<?php
		add_listitem("Mario Druse", "EICT, Germany", "");
	?>

	<li data-role="list-divider">Local Organization Chair</li>
	<?php
		add_listitem("Val&eacute;ria Moln&aacute;r", "BME, Hungary", "");
	?>
	
	<li data-role="list-divider">Demo and Exhibition Chair</li>
	<?php
		add_listitem("Bal&aacute;zs Sonkoly", "BME, Hungary", "");
	?>

	<li data-role="list-divider">Steering Committee</li>
	<?php
		add_listitem("Andreas Gladisch", "Deutsche Telekom Laboratories, Germany", "");
		add_listitem("Holger Karl", "University Paderborn, Germany", "");
		add_listitem("Diego R. Lopez", "Telefonica I+D, Spain", "");
		add_listitem("Kostas Pentikousis", "EICT, Germany", "");
		add_listitem("Elio Salvadori", "CREATE-NET, Italy", "");
		add_listitem("Stefano Salsano", "Univ. Tor Vergata, Italy", "");
		add_listitem("R&oacute;bert Szab&oacute;", "Ericsson, Hungary", "");
		add_listitem("Hagen Woesner", "BISDN, Germany", "");
	?>

</ul>


<?php
    include ("include/footer.php");
?>