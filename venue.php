<?php $page = 'venue';
$title = 'Venue of TEDxFSS Conference';
include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "Venue Info" ;
$info_text ='';
include 'brand.html.php';
?>

<div id="content" class="container_16">
<h2 class="title grid_6 suffix_10" id="location"><span>Location</span></h2>
<div class="prefix_2 grid_14 suffix 2" >
	<div id="address">
		<p class="cn">上海市杨浦区淞沪路252号创智天地七号楼</p>
		<p> #7,NO.252 SongHuRoad,YangPuDistrict,ShangHai</p>
	</div>
	<div id="kic">
		<img src="images/kic.jpg" alt="KIC Location"/>
		<img src="images/kicimg.jpg" alt="KIC Location"/>
	</div>
</div>
<hr class="grid_16" />
<h2 class="title grid_6 suffix_10" id="traffic"><span>Traffic</span></h2>
<div class="prefix_2 grid_14 suffix 2" >
	<div id="address" class="grid_5 alpha">
		<p><img src="images/metro10.png" alt="Metro10" /> Line 10&nbsp;&nbsp;Jiangwan Stadium Sta.</p>
		<p class="cn"><img src="images/metro10.png" alt="Metro10" /> 10号线&nbsp;&nbsp;江湾体育场站</p>
		<p><a href="http://goo.gl/wZeOg" rel="external">External Maps</a></p>
	</div>
	<div class="grid_7 omega">
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?source=s_q&amp;hl=en&amp;geocode=&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=China+Shanghai+Yang+Pu+Qu+Song+Hu+Lu+252%E5%8F%B7&amp;doflg=ptk&amp;t=h&amp;msa=0&amp;msid=200850155640009576489.0004a3113fe67ad290868&amp;ll=31.308819,121.508816&amp;spn=0.003415,0.004823&amp;output=embed"></iframe>
	</div>
</div>
</div><!-- End of Content -->
<br class="clear" />

<?php include 'footer.html.php'; ?>