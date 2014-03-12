<?php
        $page_title="";
        include("include/header.php");
?>

<h2 class="hcls">Welcome to Budapest</h2>

<p>Software Defined Networking is undoubtedly one of the chief trends in the ICT area. In the past years we have seen all big players in the networking arena starting to ride the SDN. Standardization work is actively ongoing in the Open Networking Forum (ONF), the Internet Engineering Task Force (IETF) (e.g., I2RS, freshly formed Service Function Chaining (SFC) workgroup or recent initiatives to form VNFPool), while the European Telecommunications Standards Institute (ETSI) just released several group specifications on Network Functions Virtualization (NFV). On top of the several exiting open-source SDN controllers, OpenDaylight reached significant momentum last year and arrived to its first official release in February 2014.</p>

<p>One goal of the workshop is to bring together industry and academia on the topics of SDN; in particular the workshop will feature an "industry forum", i.e., a session with presentations of key industrial players.</p>

<p>
The organizing committee is delighted to invite you to EWSDN 2014, to be held  in Budapest, Hungary between September 1st and September 3rd, 2014!
</p>

<!--<a href="sigcomm-support.pdf" rel="external" data-role="button" class="button">Supporter Information</a>-->
<a href="mailto:ewsdn@eict.de" data-role="button" class="button">Contact the Organizers</a>

<h2 class="hcls">News</h2>
<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
<?php
        include("include/news.html");
?>
</ul>
<script>
$(".newslibtn").siblings().slice(7).hide();
</script>

<h2 class="hcls">Important Dates</h2>
<?php
    include ("include/dates.html");
?>

<h2 class="hcls">Technical Co-sponsors</h2>
<div class="supporter center">
	<a href="http://www.fp7-alien.eu/"><img src="images/alien.png" alt="FP7 ALIEN Project" style="width: 250px;" /></a>
	<a href="http://www.fp7-unify.eu/"><img src="images/unify.png" alt="FP7 UNIFY Project" style="width: 250px;" /></a>
</div>

<?php
    include ("include/footer.php");
?>
