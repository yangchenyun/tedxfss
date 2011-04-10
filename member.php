<?php $page = 'memberlist'; ?> 
<!-- A customized tag to distinguish different pages -->
<?php
	$title = 'members of TEDxFSS Team';  
	include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "members" ;
		$info_text ='';
	include 'brand.html.php';
?>

	<div id="content" class="container_16">
		<?php include 'content/memberlist.php'; ?>
		<!-- Generate -->
		<?php foreach ($members as $member): ?>
 			<div class="grid_12 prefix_2 suffix_2 item" id="<?php echo $member['id']; ?>">
				<img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>" width="220px" class="grid_4 <?php if ($member['id']%2 == 0) { echo 'alt'; } ?>"/>
				<div class="info <?php if ($member['id']%2 == 0) { echo 'alt'; } ?>">
					<h3><?php echo $member['name']; ?></h3>
					<p class="short"><?php echo $member['title']; ?></p>
					<p class="intro"><?php echo $member['text']; ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div><!-- End of Content -->
	<br class="clear"/>

<?php include 'footer.html.php'; ?>