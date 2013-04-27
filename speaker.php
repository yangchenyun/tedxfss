<?php $page = 'speakerlist';
$title = 'Speakers of TEDxFSS 2011 Conference';
include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "Speakers" ;
$info_text ='';
include 'brand.html.php';
?>

<div id="content" class="container_16">
<!-- <h2 class="prefix_2 grid_10" style="font: 3.5em impact,sans-serif; margin:10px 0px; color:red;"><span>More to be revealed</span>
</h2>
<hr class="grid_16"/> -->

<?php include 'content/speakerlist.php'; ?>
<!-- Generate --> <?php foreach ($speakers as $speaker): ?>
<div class="grid_12 prefix_2 suffix_2 item"
	id="<?php echo $speaker['id']; ?>"><img
	src="<?php echo $speaker['img']; ?>"
	alt="<?php echo $speaker['name']; ?>" width="220px"
	class="grid_4 <?php if ($speaker['id']%2 == 0) { echo 'alt'; } ?>" />
<div class="info <?php if ($speaker['id']%2 == 0) { echo 'alt'; } ?>">
<h3><?php echo $speaker['name']; ?></h3>
<p class="short"><?php echo $speaker['title']; ?></p>
<?php if ($speaker['site'] != ''):?>
<a href='<?php echo $speaker['site']; ?>' rel='external'>Site</a>
<?php endif ?>

<?php if ($speaker['twitter'] != ''):?>
<a href='<?php echo $speaker['twitter']?>' rel='external'>Twitter</a>
<?php endif ?>

<?php if ($speaker['weibo'] != ''):?>
<a href='<?php echo $speaker['weibo']?>' rel='external'>Weibo</a>
<?php endif ?>

<p class="intro"><?php if ($speaker['fulltext'] != '') { echo $speaker['fulltext'];} else {echo $speaker['excerpt'];} ?></p>
</div>
</div>
<?php endforeach ?></div>
<!-- End of Content -->
<br class="clear" />

<?php include 'footer.html.php'; ?>

