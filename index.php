<?php $page = 'index'; 
// A customized tag to distinguish different pages
	$title = 'TEDxFSS Conference at 15th May, Shanghai'; 
	include 'header.html.php'; ?>
<!-- Include JQuery and Slide Script -->
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.js"></script>
<script type="text/javascript" src="js/Slider.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript">
	//Slideshow
$(document).ready(function(){	
	$("#speakerglide").easySlider({
		prevId: 'slideback',
		prevText: '',
		nextId: 'slideforward',	
		nextText: ''
	});
});	
</script>

<?php 
	$head = 'Re-vent';
	$info_text = 'Slogan<br/> Summarized Content<br/> Keywords';
	include 'brand.html.php'; 
?>

	<div id="content" class="container_16">

		<h2 class="title grid_6 suffix_10">
			<span>Our Speaker</span>
		</h2>
		<div id="showcontainer" class="grid_16">
			<div id="speakerglide" class="grid_12 push_2 alpha">
				<ul id="speakerlist">
				<!-- include the content of speaker list -->
				<?php include 'content/speakerlist.php'; ?>
				<!-- Generate -->
				<?php foreach ($speakers as $speaker): ?>
					<li class="speaker grid_4 <?php if ($speaker['id'] == 1) { echo 'alpha';} ?>">
						<img src="<?php echo $speaker['img']; ?>" alt="<?php echo $speaker['name']; ?>" width="220px"/>
						<h3><?php echo $speaker['name']; ?></h3>
						<p class="short"><?php echo $speaker['title']; ?></p>
						<p class="intro"><?php echo $speaker['text']; ?></p>
						<a href="speaker.php#<?php echo $speaker['id']; ?>">more</a>
					</li>
				<?php endforeach ?>
				</ul>
			</div><!-- End of Speakerglide -->
		</div><!-- END of Showcontainer -->

		<br class="clear"/>
		<hr class="grid_16"/><!-- Dotted line for speaker information -->
			<h2 class="title grid_6 suffix_10">
			<span>Schedule</span>
		</h2>
		<div id="speechinfo" class="grid_10 prefix_2 suffix_4">
			simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
		</div>
		<div id="timetable" class="grid_8 prefix_4 suffix_4">
			<table cellspacing="0" summary="The Schedule of TEDxFSS Event" id="scheduletable">
				<caption>The Schedule of TEDxFSS Event</caption>
				  <tbody>
					  <tr>
					    <th class="nobg" abbr="Configurations" scope="col">Schedules</th>
					    <th abbr="Dual 1.8" scope="col">Topic</th>
					  </tr>
					  <tr>
					    <th class="spec" abbr="08300900" scope="row">8:30am - 9:00am</th>
					    <td>Registration</td>
					  </tr>
					  <tr>
					    <th class="specalt" abbr="09001000" scope="row">9:00am - 10:00am</th>
					    <td class="alt">Session1: Reflection</td>
					  </tr>
					  <tr>
					    <th class="spec" abbr="08300900" scope="row">8:30am - 9:00am</th>
					    <td>Registration</td>
					  </tr>
					  <tr>
					    <th class="specalt" abbr="09001000" scope="row">9:00am - 10:00am</th>
					    <td class="alt">Session1: Reflection</td>
					  </tr>
					  <tr>
					    <th class="spec" abbr="08300900" scope="row">8:30am - 9:00am</th>
					    <td>Registration</td>
					  </tr>
					  <tr>
					    <th class="specalt" abbr="09001000" scope="row">9:00am - 10:00am</th>
					    <td class="alt">Session1: Reflection</td>
					  </tr>
				</tbody>
			</table>
		</div><!-- End of schedule -->
		

		<br class="clear"/>
		<hr class="grid_16"/><!-- Dotted line for venue informat -->
		<h2 class="title grid_6 suffix_10">
			<span>Awesome Venue</span>
		</h2>
		<div id="location" class="grid_4 prefix_2">
			<h3>Location</h3>
			<p class="short">KIC Plaza7</p>
			<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
			<h3 id="traffic">Traffic</h3>
			<p class="route"><img src="images/metro1.png" alt="Metro1"/>ShanghaiXinanlu Station</p>
			<p class="route"><img src="images/metro2.png" alt="Metro1"/>Pudong International Airport</p>
			<p class="route"><img src="images/metro3.png" alt="Metro1"/>South Railway Station</p>
		</div>
		<div id="map" class="grid_7 push_1">
			Location Map
		</div>


	</div><!-- End of Content -->
	<br class="clear"/>

<?php include 'footer.html.php'; ?>