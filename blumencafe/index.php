<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php
	include 'header.php';
?>

<body><!-- style="background-color:#000000">-->
<div id="center_width">
<?php
	if (isset($_GET['content'])) {
		$content_page=$_GET['content'].".php";
	} else {
		$content_page="home.php";
	}
	if ( (file_exists($content_page)) && ($content_page!="home.php")) {
		include $content_page;
	} else {
		include 'home.php';
	}
	/* navigation bar */
	include 'menu_bar.php';
	/* contact bar */
	include 'contact_bar.php';
	
?>
</div>

<!--
perl -p -i.bak -e 's/ß/\&szlig\;/g' *.php
-->
<script src="./js/lightbox-plus-jquery.js"></script>
<script>
    lightbox.option({
		'albumLabel': 'Bild %1 von %2',
		'positionFromTop' : 190
    })

</script>
<script type="text/javascript" src="./js/jquery.innerfade.js"></script>
<script type="text/javascript">
 $(document).ready(
    function(){
        $('#news').innerfade({
        animationtype: 'slide',
        speed: 750,
        timeout: 2000,
        type: 'random',
        containerheight: '1em'
      });

      $('ul#portfolio').innerfade({
        speed: 1000,
        timeout: 5000,
        type: 'sequence',
        containerheight: '414px'
      });

      $('.fade').innerfade({
        speed: 1000,
        timeout: 6000,
        type: 'random_start',
        containerheight: '1.5em'
      });

      $('.adi').innerfade({
        speed: 'slow',
        timeout: 5000,
        type: 'random',
        containerheight: '150px'
      });

  });
</script>
</body>
<HEAD>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
</HEAD>
</html>
