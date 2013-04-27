<?php $page = 'form'; ?>
<!-- A customized tag to distinguish different pages -->
<?php
$title = 'Register at TEDxFiveStarSquare';
include 'header.html.php'; ?>
<!-- Set the Brand Section -->
<?php $head = "Register" ;
$info_text ='';
include 'brand.html.php';
?>

<div id="content" class="container_16">
<div id="form" style="font-family:'微软雅黑','黑体',sans-serif;" class="prefix_2 grid_12 suffix_2">
<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

<script type="text/javascript">
var z7x3k7 = new WufooForm();
z7x3k7.initialize({
'userName':'tedxfss', 
'formHash':'z7x3k7', 
'autoResize':true,
'height':'1531'});
z7x3k7.display();
</script></div>
</div>
<!-- End of Content -->
<br class="clear" />

<?php include 'footer.html.php'; ?>