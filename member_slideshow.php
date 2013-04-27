<h2 class="title grid_6 suffix_10" id="members"><span>Members</span></h2>
<div id="showcontainer" class="grid_16">

<div id="memberglide" class="grid_12 push_2 alpha">
<ul id="speakerlist">
	<!-- include the content of speaker list -->
<?php include 'content/memberlist.php'; ?>
	<!-- Generate -->
<?php foreach ($members as $member): ?>
	<li
		class="speaker grid_4 <?php if ($member['id'] == 1) { echo 'alpha';} ?>">
	<img src="<?php echo $member['img']; ?>"
		alt="<?php echo $member['name']; ?>" width="220px" />
	<h3><?php echo $member['name']; ?></h3>
	<p class="short"><?php echo $member['title']; ?></p>
	<p class="intro"><?php echo $member['text']; ?></p>
	<a href="member.php#<?php echo $member['id']; ?>">more</a></li>
	<?php endforeach ?>
</ul>
</div><!-- End of Speakerglide -->
</div><!-- END of Showcontainer -->