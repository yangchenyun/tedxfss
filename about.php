<?php $page = 'about'; ?> 
<!-- A customized tag to distinguish different pages -->
<?php
	$title = 'About TED and TEDxFiveStarSquare'; 
	include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "About Us" ;
		$info_text ='';
	include 'brand.html.php';
?>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.js"></script>
<script type="text/javascript" src="js/Slider.js"></script>
<script type="text/javascript">
	//Slideshow
$(document).ready(function(){	
	$("#memberglide").easySlider({
		prevId: 'slideback',
		prevText: '',
		nextId: 'slideforward',	
		nextText: ''
	});
});	
</script>

	<div id="content" class="container_16">
	<h2 class="title grid_6 suffix_10">
		<span>About TED</span>
	</h2>

	<div id="tedintro" class="intro push_2 grid_12">
		<div id="videocontainer" width="446" height="326">
		<!-- Pull a random video into the page out of our pool -->
		<?php include 'content/videolist.php'; ?>
		<?php echo $videos[rand(0, sizeof($videos)-1)]; ?>
		</div><!-- End of Videocontainer -->

		<p>TED (Technology Entertainment and Design) is a global set of conferences curated by the American private non-profit Sapling Foundation, formed to disseminate "ideas worth spreading". Since 2007, the talks have been offered for free viewing online, under a Creative Commons license, through <a href="http://www.ted.com">TED.com</a>. More than 700 talks are currently available. As of April 2009, the talks have been viewed over 250 million times by more than 25 million people.</p>

		<p>TED was founded in 1984 as a one-off event, and the conference was held annually from 1990 in Monterey, California. TED's early emphasis, was largely technology and design, consistent with a Silicon Valley center of gravity. The events are now held in Long Beach and Palm Springs in the U.S. as well as in Europe and Asia, offering live streaming of the talks. They address an increasingly wide range of topics within the research and practice of science and culture. The speakers are given a maximum of 18 minutes to present their ideas in the most innovative and engaging ways they can. Past presenters include Bill Clinton, Jane Goodall, Malcolm Gladwell, Al Gore, Gordon Brown, Richard Dawkins, Bill Gates, the founders of Google and many Nobel Prize winners.[3]TED's current curator is the British former computer journalist and magazine publisher Chris Anderson.
		From 2005 to 2009, three $100,000 TED Prizes were awarded annually to help its winners realize a chosen wish to change the world. From 2010, in a changed selection process, a single winner is chosen to ensure that TED can maximize its efforts in achieving the winner's wish. Each winner unveils their wish at the main annual conference.</p>
	</div><!-- ENd of Tedintro -->
	<br class="clear"/>
	<hr class="grid_16"/><!-- Dotted line for venue informat -->

	<h2 class="title grid_6 suffix_10">
		<span>About TEDxFSS</span>
	</h2>
	<div id="fssintro" class="intro push_2 grid_12">
		<p>TEDxFiveStarSquare is an independently organized event officially licensed by TED. "Five Star" connotes China, while "Square" stands for a committed and sharing community. Based on our core idea "RE", we try to dig out the new value behind everything, and bring our participants a Local, Sharp, and Spirited TED experience. The TEDxFiveStarSquare team consists of enthusiastic contributors from various backgrounds and different professions. We strive to cultivate and spread the TED values, so as to inspire innovation, encourage sharing and collaboration. We are organizing annual TEDx events, while developing a local TED community (TEDtoChina.com) in the spirit of TED.</p>
 
		<p>TEDxFiveStarSquare 2011 is unveiling on May 15, 2011 in Knowledge & Innovation Center, Shanghai. 20+ speakers/performers will step on our stage, together with 350 participants, experiencing a whole day brainstorming.</p>
	</div>
	
	<br class="clear"/>
	<hr class="grid_16"/><!-- Dotted line for venue informat -->
	<h2 class="title grid_6 suffix_10">
		<span>Members</span>
	</h2>
		<div id="showcontainer" class="grid_16">

			<div id="memberglide" class="grid_12 push_2 alpha">
				<ul id="speakerlist">
				<!-- include the content of speaker list -->
				<?php include 'content/memberlist.php'; ?>
				<!-- Generate -->
				<?php foreach ($members as $member): ?>
					<li class="speaker grid_4 <?php if ($member['id'] == 1) { echo 'alpha';} ?>">
						<img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>" width="220px"/>
						<h3><?php echo $member['name']; ?></h3>
						<p class="short"><?php echo $member['title']; ?></p>
						<p class="intro"><?php echo $member['text']; ?></p>
						<a href="member.php#<?php echo $member['id']; ?>">more</a>
					</li>
				<?php endforeach ?>
				</ul>
			</div><!-- End of Speakerglide -->
		</div><!-- END of Showcontainer -->
	</div><!-- End of Content -->

	<br class="clear"/>

<?php include 'footer.html.php'; ?>