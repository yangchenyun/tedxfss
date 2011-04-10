<?php $page = 'speakerlist'; ?> 
<!-- A customized tag to distinguish different pages -->
<?php
	$title = 'Speakers of TEDxFSS 2011 Conference';  
	include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "Speakers" ;
		$info_text ='';
	include 'brand.html.php';
?>

	<div id="content" class="container_16">
		<?php include 'content/speakerlist.php'; ?>
		<!-- Generate -->
		<?php foreach ($speakers as $speaker): ?>
 			<div class="grid_12 prefix_2 suffix_2 item" id="<?php echo $speaker['id']; ?>">
				<img src="<?php echo $speaker['img']; ?>" alt="<?php echo $speaker['name']; ?>" width="220px" class="grid_4 <?php if ($speaker['id']%2 == 0) { echo 'alt'; } ?>"/>
				<div class="info <?php if ($speaker['id']%2 == 0) { echo 'alt'; } ?>">
					<h3><?php echo $speaker['name']; ?></h3>
					<p class="short"><?php echo $speaker['title']; ?></p>
					<p class="intro"><?php echo $speaker['text']; ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div><!-- End of Content -->
	<br class="clear"/>

<?php include 'footer.html.php'; ?>