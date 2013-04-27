<?php
$page = 'index';
$title = 'TEDxFSS Conference at 15th May, Shanghai';
include 'header.html.php'; ?>
<!-- Include JQuery and Slide Script -->
<script
	type="text/javascript"
	src="http://jqueryjs.googlecode.com/files/jquery-1.3.js"></script>
<script
	type="text/javascript" src="js/Slider.js"></script>
<script type="text/javascript">
	//Slideshow
$(document).ready(function(){	
	$("#speakerglide").easySlider({
		prevId: 'slideback',
		prevText: '',
		nextId: 'slideforward',	
		nextText: ''
	});

	//Table Highlight
	$("tr:not('#tablehead')").hover(
	  function () {
	    $(this).addClass("highlight");
	  },
	  function () {
	    $(this).removeClass("highlight");
	  }
	);
});	
	
</script>

<?php
$head = 'Re-vent 2011';
$info_text = '18 Speakers <br/> 5 Sessions <br/> 1 Theme - RE <br/> Dig everything, once more';
include 'brand.html.php';
?>

<div
	id="content" class="container_16">

<h2 class="title grid_6 suffix_10" id="Speakers"><span>Our Speaker</span>
</h2>
<div id="showcontainer" class="grid_16">
<div id="speakerglide" class="grid_12 push_2 alpha">
<ul id="speakerlist">
	<!-- include the content of speaker list -->
<?php include 'content/speakerlist.php'; ?>
	<!-- Generate -->
<?php foreach ($speakers as $speaker): ?>
	<li
		class="speaker grid_4 <?php if ($speaker['id'] == 1) { echo 'alpha';} ?>">
	<img src="<?php echo $speaker['img']; ?>"
		alt="<?php echo $speaker['name']; ?>" width="220px" />
	<h3><?php echo $speaker['name']; ?></h3>
	<p class="short"><?php echo $speaker['title']; ?></p>
	<div id="text_container">
		<p class="intro"><?php echo $speaker['excerpt']; ?></p>
	</div>
	<a href="speaker.php#<?php echo $speaker['id']; ?>">more</a></li>
	<?php endforeach ?>
</ul>
</div>
<!-- End of Speakerglide --></div>
<!-- END of Showcontainer --> <br class="clear" />
<hr class="grid_16" />
<!-- Dotted line for speaker information -->
<h2 class="title grid_6 suffix_10" id="schedule"><span>Schedule</span></h2>
<div id="speechinfo" class="grid_12 prefix_2 suffix_2">
	<p>TEDxFSS "Re"vent has four parts: Reflect, Revolute, Renovate and Renaissance. </p>
	<p><strong>Reflect</strong> features in rediscovering life, success, happiness, our past, present and future. </p>
	<p><strong>Revolute</strong> will redefine traditional and emerging industries, technology and innovation. </p>
	<p><strong>Renovate</strong> focuses on refinement in quality of business, welfare, education and society as a whole. </p>
	<p><strong>Renaissance</strong> will recreate the experience of audio, visual, beauty and art. </p>
</div>
<div id="timetable" class="grid_8 prefix_4 suffix_4">
<table cellspacing="0" summary="The Schedule of TEDxFSS Event"
	id="scheduletable">
	<caption>The Schedule of TEDxFSS 2011</caption>
	<tbody>
		<tr id="tablehead">
			<th class="fr" id="schedulecolumn" scope="col">Schedules</th>
			<th class="fr" id="sessioncolumn" abbr="Session" scope="col">Session</th>
		</tr>
		<tr>
			<th class="spec">8:00am - 9:00am</th>
			<td>Registration</td>
		</tr>
		<tr>
			<th class="specalt">9:30am - 10:40am</th>
			<td class="alt">Session 1</td>
		</tr>
		<tr>
			<th class="spec">10:50am - 11:50am</th>
			<td>Session 2</td>
		</tr>
		<tr>
			<th class="spec">11:50am - 13:20am</th>
			<td>Lunch Break</td>
		</tr>
		<tr>
			<th class="specalt">13:30pm - 15:00pm</th>
			<td>Session 3</td>
		</tr>
		<tr>
			<th class="specalt">15:20pm - 16:20pm</th>
			<td>Session 4</td>
		</tr>
		<tr>
			<th class="spec">16:30pm - 18:00pm</th>
			<td>Session 5</td>
		</tr>
	</tbody>
</table>
</div>
<!-- End of schedule --> <br class="clear" />
<hr class="grid_16" />
<!-- Dotted line for venue informat -->
<h2 class="title grid_6 suffix_10"><span>Awesome Venue</span>
</h2>
<div class="grid_5 prefix_2" id="location">
<h3>Location</h3>
	<p class="short">KIC Plaza7</p>
	<p>NO.252 Songhu Road,<br/>Yangpu District,ShangHai<br/></p>
	<p id="address"><a href="venue.php#location">More</a></p>
	<h3 id="traffic">Traffic</h3>
	<p class="route"><img src="images/metro10.png" alt="Metro10" /> Line 10 Jiangwan
	Stadium Sta.</p>
	<p id="address"><a href="venue.php#traffic">More</a></p>
</div>

<div id="map" class="grid_8">Location Map</div>
</div>
<!-- End of Content -->
<br class="clear" />

<hr class="grid_16" />
<h2 class="title grid_6 suffix_10"><span>Our Sponsors</span></h2>

<div id="sponsorinfo" class="grid_12 prefix_2 suffix_2">

	<div class="sponsoritem"><img width="400px" class="grid_5 " alt="Cnature" src="images/cnaturelogo.png">
		<div class="info ">
			<h3>CNature Foundation</h3>
			<p class="intro">CNature基金会是隶属于联领基金会的本土非营利机构，由香港及大陆两地崇尚自然、热心公益的企业家、和素有慈善传统的家族基金共同资助而成。 CNature成立于2006年，以18~35岁的新生代为主要受众群体， 用创意公益的理念和新锐时尚的态度在亚太地区推动可持续的生活方式和精神理念。“C”for Creativity，Change and Communication。CNature 致力于塑造具有时代感的NGO形象，是"创意公益"和"公益2.0"的提出者和先行者。快乐、时尚、平等、分享、年轻是CNature的活动精神； 鼓励与支持青年人在公益领域的创造思维，并为中国公益事业挖掘并培养新生力量。</p>
			<p class="intro"><b>CNature与TEDxFSS合作缘起</b><br/>
			"Change"-- CNature 2011年"C"系列概念关键词，"RE - Dig everything, once more."-- TEDxFSS的品牌核心，这次Cnature 与TEDxFS合作是CNature致力于推动公众思维方式与生活态度转变的全新起点。TEDxFSS的核心团队由一群拥有梦想与实干精神的年轻人组成，勇于挑战与改变，他们的努力和专注让CNature由衷地愿意支持他们实现更多好玩有趣、并富有意义的创想，正如这次的TEDxFSS！</p>
		</div>
	</div>


	<div class="sponsoritem"><img width="400px" class="grid_5 alt" alt="kiclogo" src="images/kiclogo.png">
		<div class="info ">
			<h3>Knowledge & Innovation Community</h3>
			<a href='http://www.kic.net.cn' rel='external'>Site</a>
			<p class="intro">The Knowledge & Innovation Community (KIC), located in the centre of Wujiaochang Sub-Centre, is a crucial project under Shanghai’s “Revitalize the City with Science and Technology” strategy.  It was inspired by a combination of the technological innovation and entrepreneurial spirit found in the Silicon Valley in the United States and the cultural vibrancy of the Left Bank of Paris.  Jointly developed by Yangpu Government and Shui On Development Limited, KIC will realize its goal of becoming an innovative knowledge-based community through the integration of three zones; Academic Zone, Tech Campus and Community Zone. Coupled with the world leading high-tech enterprises, creative design practices, venture capitalists, incubators and a comprehensive service and support structure, KIC is a motivating knowledge and innovation community in which people to work, learn, grow, and realize potential to the fullest. </p>
		</div>
	</div>
	
	<div class="sponsoritem"><img width="400px" class="grid_5 " alt="BanMakelogo" src="images/banmakelogo.png">
		<div class="info ">
			<h3>Banmake</h3>
			<a href='http://banmake.com/' rel='external'>Site</a>
			<p class="intro">Banmake is positioned as a social media to combine QR Code with micro-blog（weibo）, aiming at developing QR Code interaction and application ，serving as events planner & propagator with all blowing ideas. It can be easily used on mobile with photograph feature. You can join in our meticulous-designed activities after scanning code by your phone and enjoy various kinds bonus at the current time. Uploading relevant information to social media such as sina weibo is also available as you wish.</p>
		</div>
	</div>
		<div class="sponsoritem"><img width="400px" class="grid_5 " alt="Shandalogologo" src="images/Shandalogo.png">
		<div class="info ">
			<h3>Shanda</h3>
			<a href='http://in.sdo.com/' rel='external'>Site</a>
			<p class="intro">我们关注技术的创新与发展，我们更加着力于关注产品技术应用的提升，为中国的网络用户提供卓越的产品和更加人性化的服务。
我们相信人才是创新产品的源动力，只有创新务实的人才，才有可能做出创新的产品！
我们崇尚基于信任基础的自治文化。我们提供一个宽松的环境和一个自由而能任意驰骋遨游的舞台， 让您实现您的梦想。
我们也关注正在成长的创新型创业团队。除了提供必备的良好环境外，我们也会为您们配备相应的保障机制，辅助您尽快达成您的梦想。如果您有一个好的创业项目，可以通过这里联系我们。</p>
		</div>
	</div>

</div>
<br class="clear" />
	<?php include 'footer.html.php'; ?>